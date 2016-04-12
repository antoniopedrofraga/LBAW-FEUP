-- \i C:/Users/'Pedro Fraga'/Documents/GitHub/LBAW-FEUP/sql/database.sql
-- \i C:/Users/'Pedro Fraga'/Documents/GitHub/LBAW-FEUP/sql/triggers.sql
-- \i C:/Users/'Pedro Fraga'/Documents/GitHub/LBAW-FEUP/sql/populate_test.sql


CREATE OR REPLACE FUNCTION atualizarLeilao ()
  RETURNS trigger AS
$$
	BEGIN
		INSERT INTO Notificacao (idUtilizador, texto) VALUES 
		((SELECT idLeiloeiro FROM Leilao WHERE idLeilao = NEW.idLeilao),
			'O cliente ' || (SELECT nomeUtilizador FROM Membro WHERE idUtilizador = NEW.idCliente) || ' licitou no seu leilao ' || (SELECT nome FROM Leilao WHERE idLeilao = NEW.idLeilao) || '.');
		IF (NEW.valor > (SELECT valor FROM Licitacao WHERE idLeilao = NEW.idLeilao ORDER BY valor LIMIT 1))
		THEN
			INSERT INTO Notificacao (idUtilizador, texto) VALUES 
			((SELECT idCliente FROM Licitacao WHERE idLeilao = NEW.idLeilao ORDER BY valor LIMIT 1),
				'A sua licitacao no leilao ' || (SELECT nome FROM Leilao WHERE idLeilao = NEW.idLeilao) || ' foi ultrapassada.');
		END IF;
 		UPDATE Leilao SET licitacaoAtual = NEW.valor WHERE idLeilao = NEW.idLeilao AND 
 			(NEW.valor > licitacaoAtual OR licitacaoAtual IS NULL);
 		RETURN NEW;
	END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER maiorLicitacao 
BEFORE INSERT 
ON Licitacao
FOR EACH ROW EXECUTE PROCEDURE atualizarLeilao();



CREATE OR REPLACE FUNCTION removeLicitacoesENotifica ()
 	RETURNS trigger AS
$$
  DECLARE
    _leiloeiro INTEGER;
    _licitacao INTEGER;
    _nomeLeilao VARCHAR(50);
  BEGIN
  		FOR _licitacao IN (SELECT idLicitacao FROM Licitacao WHERE idLeilao = OLD.idLeilao)
  		LOOP
  			DELETE FROM Licitacao 
				WHERE idLicitacao = _licitacao RETURNING idCliente, (SELECT nome FROM Leilao WHERE idLeilao = OLD.idLeilao) INTO _leiloeiro, _nomeLeilao;
			IF _leiloeiro IS NOT NULL THEN 
				INSERT INTO Notificacao (idUtilizador, texto) VALUES (_leiloeiro, 'O leilao ' || _nomeLeilao || ' foi eliminado, como tal as tuas licitacoes nesse leilao tambem foram eliminadas.');
  			END IF;
  		END LOOP;
  		RETURN OLD;
  END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER leilaoApagado
AFTER DELETE 
ON Leilao
FOR EACH ROW EXECUTE PROCEDURE removeLicitacoesENotifica ();


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
		INSERT INTO Notificacao (idUtilizador, texto) VALUES ( NEW.idMembroBanido, 'Foi banido durante ' ||  NEW.duracao ||
		 ' dias, como tal todos os seu leiloes/licitacoes foram apagadas. Mensagem do administrador: ' || NEW.motivo );
		RETURN NEW;
	END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER membroBanido 
AFTER INSERT 
ON MembroBanido
FOR EACH ROW EXECUTE PROCEDURE membroBanido ();


CREATE TRIGGER feedback 
AFTER INSERT 
ON Feedback
FOR EACH ROW EXECUTE PROCEDURE notificaFeedback ();


