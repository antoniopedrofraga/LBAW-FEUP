/* Este full text search serve para procurar strings no texto de descrição, será usado para procurar leilões */
/* search bar que pode ser encontrada no header (tu é que és o textinhos, por isso escreve aqui lodo)*/

SELECT * FROM Leilao WHERE to_tsvector(descricao) @@ to_tsquery('com') OR to_tsvector(nome) @@ to_tsvector('com');