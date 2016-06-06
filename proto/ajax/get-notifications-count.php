<?php

	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec('SET SCHEMA \'proto\'');

	$id = $_GET["id"];

	$query = "SELECT COUNT(*) as count FROM Notificacao WHERE Notificacao.idutilizador = ?";
	$stmt = $conn->prepare($query);
	$stmt->execute(array($id));
	$count = $stmt->fetch();
	echo json_encode($count);
?>