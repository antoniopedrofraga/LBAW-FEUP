<?php
	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$conn->exec('SET SCHEMA \'final\'');

  	$string = $_GET["text"];

  	$query = "SELECT * FROM Leilao WHERE to_tsvector('portuguese', descricaocompleta) @@ to_tsquery('portuguese', ?) OR to_tsvector('portuguese', descricaobreve) @@ to_tsquery('portuguese', ?) OR LOWER(nome) LIKE LOWER(%?%) LIMIT 5";
  	//"SELECT * FROM Leilao WHERE nome LIKE '%" . $string . "%' LIMIT 5";
  	$stmt = $conn->prepare($query);
 	$stmt->execute(array($string, $string, $string));
 	$auctions = $stmt->fetchAll();
 	foreach ($auctions as &$auction) {
 		$query = "SELECT * FROM imagem WHERE idleilao = ?";
 		$stmt = $conn->prepare($query);
 		$stmt->execute(array($auction['idleilao']));
 		$result = $stmt->fetch();
 		$auction['link'] = $result['link'];
 	}

 	echo json_encode($auctions);
?>