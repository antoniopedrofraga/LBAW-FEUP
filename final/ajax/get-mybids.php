<?php
	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec('SET SCHEMA \'final\'');

	$id = $_GET["id"];

	$query = "SELECT * FROM Leilao, Licitacao WHERE Leilao.idLeilao = Licitacao.idLeilao AND Licitacao.idCliente = ? ORDER BY dataColocacao";
	$stmt = $conn->prepare($query);
	$stmt->execute(array($id));
	$notifications = $stmt->fetchAll();
	foreach ($notifications as &$auction) {
		$stmt = $conn->prepare("SELECT * FROM Imagem WHERE idleilao = ?");
		$stmt->execute(array($auction['idleilao']));
		$imagem = $stmt->fetch();
		$auction['imagelink'] = $imagem['link'];
	}
	echo json_encode($notifications);
	?>