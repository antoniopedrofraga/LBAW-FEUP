<?php
	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$conn->exec('SET SCHEMA \'proto\'');

  	$username = $_GET["username"];

  	$query = "SELECT * FROM Notificacao, Membro WHERE Notificacao.idUtilizador = Membro.idUtilizador AND Notificacao.read = false AND Membro.nomeUtilizador = ? ORDER BY dataNotificacao";
  	$stmt = $conn->prepare($query);
 	$stmt->execute(array($username));
 	$notifications = $stmt->fetchAll();

 	$query = "UPDATE Notificacao SET read = true WHERE idUtilizador IN (SELECT idUtilizador FROM Membro WHERE nomeUtilizador = ?)";
  	$stmt = $conn->prepare($query);
 	$stmt->execute(array($username));
 	$stmt->fetchAll();

 	echo json_encode($notifications);
?>