-- \i C:/Users/'Pedro Fraga'/Documents/GitHub/LBAW-FEUP/sql/database.sql
-- \i C:/Users/'Pedro Fraga'/Documents/GitHub/LBAW-FEUP/sql/triggers.sql
-- \i C:/Users/'Pedro Fraga'/Documents/GitHub/LBAW-FEUP/sql/populate.sql


CREATE OR REPLACE FUNCTION atualizarLeilao ()
  RETURNS trigger AS
$$
	BEGIN
 		UPDATE Leilao SET licitacaoAtual = NEW.valor WHERE idLeilao = NEW.idLeilao AND 
 			(NEW.valor > licitacaoAtual OR licitacaoAtual IS NULL);
 		RETURN NEW;
	END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER maiorLicitacao 
AFTER INSERT 
ON Licitacao
FOR EACH ROW EXECUTE PROCEDURE atualizarLeilao();



CREATE OR REPLACE FUNCTION removeLicitacoesENotifica ( _idMembroBanido INTEGER )
 	RETURNS void AS
$$
  DECLARE
    _leiloeiro INTEGER;
    _leilao INTEGER;
    _nomeLeilao VARCHAR(50);
  BEGIN
  		DELETE FROM Licitacao 
			WHERE idLeilao IN (SELECT idLeilao FROM Leilao WHERE idLeiloeiro = _idMembroBanido) RETURNING idCliente, (SELECT nome FROM Leilao WHERE idLeiloeiro = _idMembroBanido LIMIT 1) INTO _leiloeiro, _nomeLeilao;
		IF _leiloeiro IS NOT NULL THEN 
			INSERT INTO Notificacao (idUtilizador, texto) VALUES (_leiloeiro, 'O leilao ' || _nomeLeilao::text || ' foi eliminado, como tal as tuas licitacoes nesse leilao tambem foram eliminadas.');
  		END IF;
  END;
$$ LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION atualizaMaiorLicitacao ()
 	RETURNS void AS
$$
	DECLARE
    	_leilao INTEGER;
    	_cliente INTEGER;
    	_nomeLeilao VARCHAR(50);
	BEGIN
		FOR _leilao IN (SELECT idLeilao FROM Leilao)
  		LOOP
    		UPDATE Leilao SET licitacaoAtual = (SELECT valor FROM Licitacao WHERE idLeilao = _leilao ORDER BY valor DESC LIMIT 1) 
    		WHERE idLeilao = _leilao RETURNING nome INTO _nomeLeilao;

    		SELECT idCliente INTO _cliente FROM Licitacao WHERE idLeilao = _leilao ORDER BY valor DESC LIMIT 1;
    		IF (_cliente) IS NOT NULL THEN 
    			INSERT INTO Notificacao (idUtilizador, texto) VALUES ( _cliente, 'A sua licitacao no leilao ' || _nomeLeilao || ' voltou a ser a mais alta.');
    		END IF;
  		END LOOP;
	END;
$$ LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION membroBanido ()
  	RETURNS trigger AS
$$
	BEGIN
		-- Leiloeiro banido
		EXECUTE removeLicitacoesENotifica ( NEW.idMembroBanido );
		DELETE FROM Leilao
			WHERE idLeiloeiro = NEW.idMembroBanido;
		-- Cliente banido
		DELETE FROM Licitacao 
			WHERE idCliente = NEW.idMembroBanido;
		EXECUTE atualizaMaiorLicitacao ();
		RETURN NEW;
	END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER membroBanido 
AFTER INSERT 
ON MembroBanido
FOR EACH ROW EXECUTE PROCEDURE membroBanido ();