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
 
	PRIMARY KEY (idUtilizador),
	UNIQUE (nomeUtilizador),
	UNIQUE (email),
	CONSTRAINT dataCorreta CHECK (EXTRACT(YEAR FROM CURRENT_DATE)-EXTRACT(YEAR FROM DataNascimento) >= 18)
)
;
 
DROP TABLE IF EXISTS MembroBanido CASCADE
;
 
CREATE TABLE MembroBanido
(
 
	idMembroBanido INTEGER,
	dataBanido DATE NOT NULL,
	duracao INTEGER,
	motivo TEXT,
 
	PRIMARY KEY (idMembroBanido),
	FOREIGN KEY (idMembroBanido)
		REFERENCES Membro(idUtilizador)	
)
;
 
DROP TABLE IF EXISTS Admin CASCADE
;
 
CREATE TABLE Admin
(
	idAdmin INTEGER,
 
	PRIMARY KEY (idAdmin),
	FOREIGN KEY (idAdmin)
		REFERENCES Membro(idUtilizador) 
)
;
 
DROP TABLE IF EXISTS Cliente CASCADE
;
 
CREATE TABLE Cliente
(
	idCliente INTEGER,
 
	PRIMARY KEY (idCliente),
	FOREIGN KEY (idCliente)
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
	dataMensagem DATE NOT NULL,
 
	PRIMARY KEY (idMensagem),
	FOREIGN KEY (idRecetor)
		REFERENCES Membro(idUtilizador) ,
	FOREIGN KEY (idEmissor)
		REFERENCES Membro(idUtilizador),
	CONSTRAINT comprimentoMensagem CHECK (CHAR_LENGTH(texto) > 0 AND CHAR_LENGTH(texto) < 5000 )
)
;
 
DROP TABLE IF EXISTS Notificacao CASCADE
;
 
CREATE TABLE Notificacao
(
	idNotificacao SERIAL,
	idCliente INTEGER NOT NULL,
	texto TEXT NOT NULL,
	dataNotificacao DATE NOT NULL,
 
	PRIMARY KEY (idNotificacao),
	FOREIGN KEY (idCliente)
		REFERENCES Cliente(idCliente) 
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
	dataFeedback DATE NOT NULL,
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
		REFERENCES Cliente(idCliente) ,
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
		REFERENCES Cliente(idCliente) ,
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
	dataColocacao DATE NOT NULL DEFAULT NOW(),
	duracao INTEGER NOT NULL,
	idLeiloeiro INTEGER NOT NULL,
	idMarca INTEGER,
	idFeedbackLeiloeiro INTEGER DEFAULT NULL,
	idFeedbackCliente INTEGER DEFAULT NULL,
 
	PRIMARY KEY (idLeilao),
	FOREIGN KEY (idLeiloeiro)
		REFERENCES Cliente(idCliente),
	FOREIGN KEY (idMarca)
		REFERENCES Marca(idMarca),
	FOREIGN KEY (idFeedbackLeiloeiro)
		REFERENCES Feedback(idFeedback),
	FOREIGN KEY (idFeedbackCliente)
		REFERENCES Feedback(idFeedback),
	CONSTRAINT tamanhoDescricao CHECK (CHAR_LENGTH(descricao) > 10 AND CHAR_LENGTH(descricao) < 2500),
	CONSTRAINT valorLicitacaoBase CHECK (licitacaoBase > 0.01),
	CONSTRAINT dataCorreta CHECK (dataColocacao < CURRENT_DATE),
	CONSTRAINT duracaoLeilao CHECK (duracao > 1 AND duracao < 14)
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
	dataLicitacao DATE NOT NULL DEFAULT NOW(),
 
	PRIMARY KEY (idLicitacao),	
	FOREIGN KEY (idCliente)
		REFERENCES Cliente(idCliente) ,
	FOREIGN KEY (idLeilao)
		REFERENCES Leilao(idLeilao) 
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
		REFERENCES Cliente(idCliente) 
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
		REFERENCES Cliente(idCliente) 
)
;