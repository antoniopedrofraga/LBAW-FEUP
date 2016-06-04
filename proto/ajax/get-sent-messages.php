<?php

	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec('SET SCHEMA \'proto\'');

	$id = $_GET["id"];
	$offset = $_GET["offset"];
	$limit = $_GET["limit"];

	$query = "SELECT * FROM Mensagem, Membro WHERE Mensagem.idEmissor = ? AND Mensagem.idRecetor = Membro.idutilizador ORDER BY dataMensagem OFFSET ? LIMIT ?";
	$stmt = $conn->prepare($query);
	$stmt->execute(array($id, $offset, $limit));
	$messages = $stmt->fetchAll();
	array_walk($messages, function(&$message) { $message['horamensagem'] = date('H:i', strtotime($message['datamensagem'])); $message['datamensagem'] = date('d-m-Y', strtotime($message['datamensagem'])); });

	echo json_encode($messages);
	?>
