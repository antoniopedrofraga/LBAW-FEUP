INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('joaoferreira', 'jaoo@up.pt', '123abc', '1990-03-03', 'Joao Ferreira', 'Cliente');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('anamendes', 'amendes@up.pt', 'letmein', '1993-10-20', 'Ana Mendes', 'Cliente');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('ruiguimaraes', 'ruiguima@up.pt', 'awsd', '1982-04-10', 'Rui Guimaraes', 'Cliente');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('bertopassos', 'a.passos@up.pt', 'plot25', '1988-01-06', 'Alberto Passos', 'Cliente');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('joaoestrada', 'jestrada@up.pt', 'kek', '1995-02-15', 'Joao Estrada', 'Cliente');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('diogoreis', 'diogoreis@up.pt', '85ykbd', '1987-06-10', 'Diogo Reis', 'Cliente');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('joanagomes', 'jogomes@up.pt', 'bottomsup', '1990-12-21', 'Joana Gomes', 'Cliente');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('davidpereira', 'davsper@up.pt', 'fgbuf', '1991-07-12', 'David Pereira', 'Cliente');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('tiagomatos', 'tiagomatos@up.pt', 'wfwfoihn', '1993-05-01', 'Tiago Matos', 'Cliente');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('sergiomad', 'sergio.madeira@up.pt', 'jino44', '1989-02-28', 'Sergio Madeira', 'Cliente');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('pedrofraga', 'fraga@up.pt', 'letmein', '1995-08-03', 'Pedro Fraga', 'Admin');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('luisoliveira', 'luis@up.pt', '123abc', '1995-12-06', 'Luis Oliveira', 'Admin');
INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES ('pedromartins', 'pvlmartins@up.pt', 'canttouchthis', '1992-03-25', 'Pedro Martins', 'Admin');

INSERT INTO Marca (nome) VALUES ('Ford');
INSERT INTO Marca (nome) VALUES ('Renault');
INSERT INTO Marca (nome) VALUES ('Seat');
INSERT INTO Marca (nome) VALUES ('Citroen');
INSERT INTO Marca (nome) VALUES ('Toyota');
INSERT INTO Marca (nome) VALUES ('Mercedes');
INSERT INTO Marca (nome) VALUES ('Nissan');

INSERT INTO Leilao (nome, descricao, licitacaoBase, licitacaoAtual, dataColocacao, duracao, idLeiloeiro, idMarca, idFeedbackLeiloeiro, idFeedbackCliente) VALUES ('Toyota Prius - Bom estado', 'Carro de 2006 em bom estado, na zona do Porto', 5000, 10500,'2016-03-15 14:03:52', 10, 1, 5, 1, 1);
INSERT INTO Leilao (nome, descricao, licitacaoBase, licitacaoAtual, dataColocacao, duracao, idLeiloeiro, idMarca, idFeedbackLeiloeiro, idFeedbackCliente) VALUES ('Ford Focus 1600 Turbo Diesel', 'Carro de 2009 com 150000Km, bem conservado', 6000, 8600,'2016-01-10 21:41:12', 13, 2, 1, 2, 2);
INSERT INTO Leilao (nome, descricao, licitacaoBase, licitacaoAtual, dataColocacao, duracao, idLeiloeiro, idMarca, idFeedbackCliente) VALUES ('Seat Ibiza 140CV', 'Veiculo a gasolina de 1995, com 170000km, em bom estado. Contacte pra saber mais', 800, 1100,'2016-02-22 10:20:30', 7, 3, 3, 3);
INSERT INTO Leilao (nome, descricao, licitacaoBase, licitacaoAtual, dataColocacao, duracao, idLeiloeiro, idMarca) VALUES ('Renault Clio 2008', 'Em optimo estado, 100000km, revisão e inspecção em dia', 5500, 8000, '2016-04-02 17:32:11', 14, 4, 2);
INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Citroen DS3 Turbo Diesel', 'Carro de 2013, atual, citadino, 3 portas, bem estimado', 10000, 14, 5, 4);
INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Citroen Saxo', 'Veiculo de 2004, com 140000km, bem conservado', 3000, 10, 6, 4);
INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Seat Leon FR', 'Veiculo de 2011, 5 portas, como novo', 9000, 7, 5, 3);
INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Ford Fiesta', 'Carro de 1999, com inspecção em dia e em muito bom estado.', 1200, 5, 7, 1);
INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Toyota Auris', 'Carro de 2009, em muito bom estado, pouco uso.', 7500, 12, 8, 5);
INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Renault Megane', 'Modelo de 2007, muito espaçoso. Inclui uma mala de tejadilho', 5000, 8, 9, 2);
INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Mercedes Classe A', 'Modelo de 2012, em optimo estado, apenas 17000km', 16000, 7, 10, 6);
INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Mercedes Classe C', 'Modelo de 2010, da zona do Porto, bem estimado', 10000, 10, 1, 6);
INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Renault Captur', 'Modelo de 2013, na zona do Porto, em muito boas condições, como novo!', 7000, 5, 6, 2);
INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Nissan Rogue', 'Carro de 2011, bem cuidado, com inspecção em dia.', 8000, 8, 10, 7);
INSERT INTO Leilao (nome, descricao, licitacaoBase, duracao, idLeiloeiro, idMarca) VALUES ('Nissan Qashqai', 'Carro de 2012, na zona de Lisboa, muito bem estimado', 8700, 5, 9, 7);

INSERT INTO Licitacao (idLeilao, idCliente, valor, dataLicitacao) VALUES (1, 2, 6000, '2016-03-18 23:05:40');
INSERT INTO Licitacao (idLeilao, idCliente, valor, dataLicitacao) VALUES (1, 4, 8500, '2016-03-20 09:12:33');
INSERT INTO Licitacao (idLeilao, idCliente, valor, dataLicitacao) VALUES (1, 3, 10500, '2016-03-24 13:28:00');
INSERT INTO Licitacao (idLeilao, idCliente, valor, dataLicitacao) VALUES (2, 9, 7000, '2016-01-12 05:03:21');
INSERT INTO Licitacao (idLeilao, idCliente, valor, dataLicitacao) VALUES (2, 8, 8600, '2016-01-20 21:14:50');
INSERT INTO Licitacao (idLeilao, idCliente, valor, dataLicitacao) VALUES (3, 10, 1100, '2016-02-25 05:03:21');
INSERT INTO Licitacao (idLeilao, idCliente, valor) VALUES (4, 5, 8300);
INSERT INTO Licitacao (idLeilao, idCliente, valor) VALUES (4, 6, 8400);
INSERT INTO Licitacao (idLeilao, idCliente, valor) VALUES (5, 1, 10500);
INSERT INTO Licitacao (idLeilao, idCliente, valor) VALUES (6, 7, 3400);
INSERT INTO Licitacao (idLeilao, idCliente, valor) VALUES (7, 3, 9350);
INSERT INTO Licitacao (idLeilao, idCliente, valor) VALUES (7, 5, 9500);

INSERT INTO Feedback (texto) VALUES ('Muito prestavel');
INSERT INTO Feedback (texto, valor) VALUES ('Correu bem', 4);
INSERT INTO Feedback (texto, valor) VALUES ('Pagamento demorado', 2);
INSERT INTO Feedback (texto, valor) VALUES ('Filtro de ar entupido', 3);
INSERT INTO Feedback (texto, valor) VALUES ('Horrivel! Não recomendo', 1);

INSERT INTO FeedbackComprador (idFeedback, idComprador) VALUES (1, 3);
INSERT INTO FeedbackComprador (idFeedback, idComprador) VALUES (4, 8);
INSERT INTO FeedbackComprador (idFeedback, idComprador) VALUES (5, 10);

INSERT INTO FeedbackLeiloeiro (idFeedback, idLeiloeiro) VALUES (2, 1);
INSERT INTO FeedbackLeiloeiro (idFeedback, idLeiloeiro) VALUES (3, 2);

INSERT INTO Mensagem (idEmissor, idRecetor, texto, dataMensagem) VALUES (5, 7, 'Reparei no que fazes com as laranjas. Se eu te trouxer uma vaca tiras-lhe o leite?', '2016-02-13 16:23:59');
INSERT INTO Mensagem (idEmissor, idRecetor, texto) VALUES (2, 12, 'Ola. Eu tenho uma duvida que gostava de ver esclarecida. Agradecia que me contactasse de volta. Cumprimentos');
INSERT INTO Mensagem (idEmissor, idRecetor, texto) VALUES (12, 13, 'Hey, precisamos de reunir para discutir sobre umas alteracoes que gostava de fazer no site.')
INSERT INTO Mensagem (idEmissor, idRecetor, texto) VALUES (3, 7, 'Ola. Gostava de obter mais informacoes sobre o carro. Cumprimentos');
INSERT INTO Mensagem (idEmissor, idRecetor, texto) VALUES (7, 3, 'Sim, claro. Tal como diz na descricao o carro e de 1999, tem 132450km e esta em muito bom estado. Obrigado, disponha!');

INSERT INTO MembroBanido (idMembroBanido, duracao, motivo) VALUES (3, 365, 'Foi rude');