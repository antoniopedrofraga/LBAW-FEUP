INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil) VALUES ('pedrofraga', 'pedro@up.pt', '123abc', '1995-08-03');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil) VALUES ('luisoliveira', 'luis@up.pt', 'letmein', '1995-12-06');

INSERT INTO Cliente (idUtilizador) VALUES (1);
INSERT INTO Cliente (idUtilizador) VALUES (2);

INSERT INTO Marca (nome) VALUES ('Ford');

INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Teste', 'Descricao Teste', 2, 10, 0, 0);

INSERT INTO Licitacao (idLeilao, idCliente, valor) VALUES (0, 1, 20);