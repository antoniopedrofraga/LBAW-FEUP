<?php
	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$conn->exec('SET SCHEMA \'proto\'');

  	$id = $_GET["id"];
	$offset = $_GET["offset"];
	$limit = $_GET["limit"];

  	$query = "SELECT * FROM Notificacao WHERE Notificacao.idutilizador = ? ORDER BY datanotificacao DESC OFFSET ? LIMIT ?";
  	$stmt = $conn->prepare($query);
 	$stmt->execute(array($id, $offset, $limit));
 	$notifications = $stmt->fetchAll();

 	array_walk($notifications, function(&$notification) { $notification['horanotificacao'] = date('H:i', strtotime($notification['datanotificacao'])); $notification['datanotificacao'] = date('d-m-Y', strtotime($notification['datanotificacao'])); });

 	echo json_encode($notifications);
?>