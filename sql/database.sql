DROP TABLE IF EXISTS Membro CASCADE
;
DROP TABLE IF EXISTS MembroBanido CASCADE
;
DROP TABLE IF EXISTS Admin CASCADE
; 
DROP TABLE IF EXISTS Cliente CASCADE
;
DROP TABLE IF EXISTS Mensagem CASCADE
;
DROP TABLE IF EXISTS Notificacao CASCADE
;
DROP TABLE IF EXISTS Marca CASCADE
;
DROP TABLE IF EXISTS Feedback CASCADE
;
DROP TABLE IF EXISTS FeedbackComprador CASCADE
;
DROP TABLE IF EXISTS Registo CASCADE
;
DROP TABLE IF EXISTS Preferencias CASCADE
;
DROP TABLE IF EXISTS FeedbackLeiloeiro CASCADE
;
DROP TABLE IF EXISTS Leilao CASCADE
;
DROP TABLE IF EXISTS Imagem CASCADE
;
DROP TABLE IF EXISTS Licitacao CASCADE
;
 

CREATE TABLE Membro
(
	idUtilizador SERIAL,
	nomeUtilizador TEXT NOT NULL,
	email TEXT NOT NULL,
	password TEXT NOT NULL,
	dataNascimento DATE NOT NULL,
	nomeCivil TEXT,
 
	PRIMARY KEY (idUtilizador),
	UNIQUE (nomeUtilizador),
	UNIQUE (email),
	CHECK (EXTRACT(YEAR FROM CURRENT_DATE)-EXTRACT(YEAR FROM DataNascimento) >= 18 )
)
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

 
CREATE TABLE Admin
(
	idAdmin INTEGER,
 
	PRIMARY KEY (idAdmin),
	FOREIGN KEY (idAdmin)
		REFERENCES Membro(idUtilizador) 
)
;
 
CREATE TABLE Cliente
(
	idCliente INTEGER,
 
	PRIMARY KEY (idCliente),
	FOREIGN KEY (idCliente)
		REFERENCES Membro(idUtilizador) 
)
;
 
 
CREATE TABLE Mensagem
(
	idMensagem SERIAL,
	idEmissor INTEGER NOT NULL,
	idRecetor INTEGER NOT NULL,
	texto TEXT NOT NULL,
	DATA DATE NOT NULL,
 
	PRIMARY KEY (idMensagem),
	FOREIGN KEY (idRecetor)
		REFERENCES Membro(idUtilizador) ,
	FOREIGN KEY (idEmissor)
		REFERENCES Membro(idUtilizador),
	CHECK (CHAR_LENGTH(texto) > 0 AND CHAR_LENGTH(texto) < 5000 )
)
;
 
 
CREATE TABLE Notificacao
(
	idNotificacao SERIAL,
	idCliente INTEGER NOT NULL,
	texto TEXT NOT NULL,
	DATA DATE NOT NULL,
 
	PRIMARY KEY (idNotificacao),
	FOREIGN KEY (idCliente)
		REFERENCES Cliente(idCliente) 
)
;
 
CREATE TABLE Marca
(
	idMarca SERIAL,
	nome TEXT NOT NULL,
 
	PRIMARY KEY (idMarca),
	UNIQUE(nome)
)
;
 

CREATE TABLE Feedback
(
	idFeedback SERIAL,
	texto TEXT NOT NULL,
	DATA DATE NOT NULL,
	valor INTEGER DEFAULT 5,
 
	PRIMARY KEY (idFeedback),	
	CHECK (CHAR_LENGTH(texto) >= 1 AND CHAR_LENGTH(texto) <= 30 ), 
	CHECK (valor >= 0 AND valor <= 5 )
)
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
 
 
CREATE TABLE Leilao
(
	idLeilao  SERIAL,
	nome TEXT NOT NULL,
	descricao TEXT NOT NULL,
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
	CHECK (CHAR_LENGTH(descricao) > 10 AND CHAR_LENGTH(descricao) < 2500 ),
	CHECK (licitacaoBase > 0.01 ),
	CHECK (dataColocacao < CURRENT_DATE),
	CHECK (duracao > 1 AND duracao < 14 )
)
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
 

 
CREATE TABLE Licitacao
(
	idLicitacao SERIAL, 
	idLeilao INTEGER NOT NULL,
	idCliente INTEGER NOT NULL,
	valor FLOAT NOT NULL,
	data DATE NOT NULL DEFAULT NOW(),
 
	PRIMARY KEY (idLicitacao),	
	FOREIGN KEY (idCliente)
		REFERENCES Cliente(idCliente) ,
	FOREIGN KEY (idLeilao)
		REFERENCES Leilao(idLeilao) 
)
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