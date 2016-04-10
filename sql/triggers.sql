-- \i C:/Users/'Pedro Fraga'/Documents/GitHub/LBAW-FEUP/sql/database.sql
-- \i C:/Users/'Pedro Fraga'/Documents/GitHub/LBAW-FEUP/sql/triggers.sql
-- \i C:/Users/'Pedro Fraga'/Documents/GitHub/LBAW-FEUP/sql/populate.sql

CREATE TRIGGER maiorLicitacao 
BEFORE INSERT 
ON Licitacao
EXECUTE PROCEDURE atualizarLeilao(Licitacao.valor);

CREATE OR REPLACE FUNCTION atualizarLeilao(
	valor INTEGER
)
  RETURNS trigger AS
$maiorLicitacao$
BEGIN
 IF valor > Leilao.licitacaoAtual OR Leilao.licitacaoAtual = NULL THEN
 UPDATE Leilao SET Leilao.licitacaoAtual = Licitacao.valor WHERE Leilao.idLeilao = Licitacao.idLeilao;
 END IF;
END;
$maiorLicitacao$ LANGUAGE plpgsql;
