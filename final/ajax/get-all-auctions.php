<?php
	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$conn->exec('SET SCHEMA \'final\'');

	$stmt = $conn->prepare("SELECT * FROM Leilao ORDER BY dataColocacao DESC");
	$stmt->execute();
	$auctions = $stmt->fetchAll();
	foreach ($auctions as &$auction) {
		$stmt = $conn->prepare("SELECT * FROM Imagem WHERE idleilao = ?");
		$stmt->execute(array($auction['idleilao']));
		$imagem = $stmt->fetch();
		$auction['imagelink'] = $imagem['link'];
	}
	echo json_encode($auctions);
?>