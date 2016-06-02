-- Função necessária para o constraint confirmaCliente funcionar:
 
CREATE OR REPLACE FUNCTION confirmaCliente(
		idCliente INTEGER
	)
  RETURNS VARCHAR(5) AS
$confirmaCliente$
BEGIN
 IF EXISTS (SELECT * FROM Membro WHERE idCliente = Membro.idUtilizador AND Membro.tipoMembro LIKE 'Cliente')
 THEN
 	RETURN 'True';
 END IF;
 RETURN 'False';
END;
$confirmaCliente$ LANGUAGE plpgsql;
 
-- Tabelas
 
DROP TABLE IF EXISTS Membro CASCADE
;
 
CREATE TABLE Membro
(
	idUtilizador SERIAL,
	nomeUtilizador VARCHAR(20) NOT NULL,
	email TEXT NOT NULL,
	password TEXT NOT NULL,
	dataNascimento DATE NOT NULL,
	nomeCivil TEXT,
        tipoMembro VARCHAR(7),
    dataInscricao TIMESTAMP NOT NULL DEFAULT NOW(),
 
	PRIMARY KEY (idUtilizador),
	UNIQUE (nomeUtilizador),
	UNIQUE (email),
	CONSTRAINT dataCorreta CHECK (EXTRACT(YEAR FROM CURRENT_DATE)-EXTRACT(YEAR FROM DataNascimento) >= 18),
        CONSTRAINT tipoMembroCorreto CHECK (tipoMembro LIKE 'Admin' OR tipoMembro LIKE 'Cliente')
)
;
 
DROP TABLE IF EXISTS MembroBanido CASCADE
;
 
CREATE TABLE MembroBanido
(
 
	idMembroBanido INTEGER,
	dataBanido TIMESTAMP NOT NULL DEFAULT NOW(),
	duracao INTEGER,
	motivo TEXT,
 
	PRIMARY KEY (idMembroBanido),
	FOREIGN KEY (idMembroBanido)
		REFERENCES Membro(idUtilizador)	
)
;
 
DROP TABLE IF EXISTS Mensagem CASCADE
;
 
CREATE TABLE Mensagem
(
	idMensagem SERIAL,
	idEmissor INTEGER NOT NULL,
	idRecetor INTEGER NOT NULL,
	texto VARCHAR(5000) NOT NULL,
	dataMensagem TIMESTAMP NOT NULL DEFAULT NOW(),
	read BOOLEAN NOT NULL DEFAULT false,
 
	PRIMARY KEY (idMensagem),
	FOREIGN KEY (idRecetor)
		REFERENCES Membro(idUtilizador) ,
	FOREIGN KEY (idEmissor)
		REFERENCES Membro(idUtilizador),
	CONSTRAINT comprimentoMensagem CHECK (CHAR_LENGTH(texto) > 0 AND CHAR_LENGTH(texto) < 5000)
)
;
 
DROP TABLE IF EXISTS Notificacao CASCADE
;
 
CREATE TABLE Notificacao
(
	idNotificacao SERIAL,
	idUtilizador INTEGER NOT NULL,
	texto TEXT NOT NULL,
	dataNotificacao TIMESTAMP NOT NULL DEFAULT NOW(),
 
	PRIMARY KEY (idNotificacao),
	FOREIGN KEY (idUtilizador)
		REFERENCES Membro(idUtilizador) 
)
;
 
DROP TABLE IF EXISTS Marca CASCADE
;
 
CREATE TABLE Marca
(
	idMarca SERIAL,
	nome VARCHAR(20) NOT NULL,
 
	PRIMARY KEY (idMarca),
	UNIQUE(nome)
)
;
 
DROP TABLE IF EXISTS Feedback CASCADE
;
 
CREATE TABLE Feedback
(
	idFeedback SERIAL,
	texto VARCHAR(30) NOT NULL,
	dataFeedback TIMESTAMP NOT NULL DEFAULT NOW(),
	valor INTEGER DEFAULT 5,
 
	PRIMARY KEY (idFeedback),	
	CONSTRAINT tamanhoFeedback CHECK (CHAR_LENGTH(texto) >= 1 AND CHAR_LENGTH(texto) <= 30), 
	CONSTRAINT valorFeedback CHECK (valor >= 0 AND valor <= 5)
)
;
 
DROP TABLE IF EXISTS FeedbackComprador CASCADE
;
 
CREATE TABLE FeedbackComprador
(
	idFeedback INTEGER,
	idComprador INTEGER,
 
	PRIMARY KEY (idFeedback, idComprador),
	FOREIGN KEY (idComprador)
		REFERENCES Membro(idUtilizador) ,
	FOREIGN KEY (idFeedback)
		REFERENCES Feedback(idFeedback) 
)
;
 
DROP TABLE IF EXISTS FeedbackLeiloeiro CASCADE
;
 
CREATE TABLE FeedbackLeiloeiro
(
	idFeedback INTEGER,
	idLeiloeiro INTEGER,
 
	PRIMARY KEY (idFeedback, idLeiloeiro),
	FOREIGN KEY (idLeiloeiro)
		REFERENCES Membro(idUtilizador) ,
	FOREIGN KEY (idFeedback)
		REFERENCES Feedback(idFeedback) 
)
;
 
DROP TABLE IF EXISTS Leilao CASCADE
;
 
CREATE TABLE Leilao
(
	idLeilao  SERIAL,
	nome VARCHAR(50) NOT NULL,
	descricao VARCHAR(5000) NOT NULL,
	licitacaoBase FLOAT NOT NULL,
	licitacaoAtual FLOAT DEFAULT NULL,
	dataColocacao TIMESTAMP NOT NULL DEFAULT NOW(),
	duracao FLOAT NOT NULL,
	idLeiloeiro INTEGER NOT NULL,
	idMarca INTEGER,
	idFeedbackLeiloeiro INTEGER DEFAULT NULL,
	idFeedbackCliente INTEGER DEFAULT NULL,
 
	PRIMARY KEY (idLeilao),
	FOREIGN KEY (idLeiloeiro)
		REFERENCES Membro(idUtilizador),
	FOREIGN KEY (idMarca)
		REFERENCES Marca(idMarca),
	FOREIGN KEY (idFeedbackLeiloeiro)
		REFERENCES Feedback(idFeedback),
	FOREIGN KEY (idFeedbackCliente)
		REFERENCES Feedback(idFeedback),
	CONSTRAINT tamanhoDescricao CHECK (CHAR_LENGTH(descricao) > 10 AND CHAR_LENGTH(descricao) < 2500),
	CONSTRAINT valorLicitacaoBase CHECK (licitacaoBase > 0.01),
	CONSTRAINT dataCorreta CHECK (dataColocacao <= NOW()),
	CONSTRAINT duracaoLeilao CHECK (duracao >= 1.0 AND duracao <= 14.0),
        CONSTRAINT confirmaCliente CHECK (confirmaCliente(idLeiloeiro) = 'True')
)
;
 
DROP TABLE IF EXISTS Imagem CASCADE
;
 
CREATE TABLE Imagem
(
	idImagem SERIAL,
	idLeilao INTEGER NOT NULL,
	link TEXT NOT NULL,
 
	PRIMARY KEY (idImagem),
	FOREIGN KEY (idLeilao)
		REFERENCES Leilao(idLeilao),
	UNIQUE(link) 
)
;
 
DROP TABLE IF EXISTS Licitacao CASCADE
;
 
CREATE TABLE Licitacao
(
	idLicitacao SERIAL, 
	idLeilao INTEGER NOT NULL,
	idCliente INTEGER NOT NULL,
	valor FLOAT NOT NULL,
	dataLicitacao TIMESTAMP NOT NULL DEFAULT NOW(),
 
	PRIMARY KEY (idLicitacao),	
	FOREIGN KEY (idCliente)
		REFERENCES Membro(idUtilizador) ,
	FOREIGN KEY (idLeilao)
		REFERENCES Leilao(idLeilao)
		ON DELETE CASCADE,
 
        CONSTRAINT confirmaCliente CHECK ( confirmaCliente(idCliente) = 'True' )
)
;
 
DROP TABLE IF EXISTS Preferencias CASCADE
;
 
CREATE TABLE Preferencias
(
	idCliente INTEGER,
	idMarca INTEGER,
 
	PRIMARY KEY (idCliente , idMarca),
	FOREIGN KEY (idMarca)
		REFERENCES Marca(idMarca) ,
	FOREIGN KEY (idCliente)
		REFERENCES Membro(idUtilizador) 
)
;
 
DROP TABLE IF EXISTS Registo CASCADE
;
 
CREATE TABLE Registo
(
	idCliente INTEGER,
	idLeilao INTEGER,
 
	PRIMARY KEY (idCliente , idLeilao),
	FOREIGN KEY (idLeilao)
		REFERENCES Leilao(idLeilao) ,
	FOREIGN KEY (idCliente)
		REFERENCES Membro(idUtilizador) 
)
;