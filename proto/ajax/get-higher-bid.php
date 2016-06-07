<?php
	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec('SET SCHEMA \'proto\'');

	$id = $_GET["auctionid"];

	$query = "SELECT idCliente FROM Licitacao WHERE valor IN (SELECT valor FROM Leilao WHERE idLeilao = ?) AND idLeilao = ?";
	$stmt = $conn->prepare($query);
	$stmt->execute(array($id, $id));
	$winner = $stmt->fetch();

	$query = "SELECT * FROM Membro WHERE idutilizador = ?";
	$stmt = $conn->prepare($query);
	$stmt->execute(array($winner['idcliente']));
	echo json_encode($stmt->fetch());
?>