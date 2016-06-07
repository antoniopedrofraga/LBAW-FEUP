<?php
	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$conn->exec('SET SCHEMA \'final\'');
  	$id = $_GET['id'];

  	$query = "SELECT idMarca FROM Preferencias WHERE idCliente = ?";
  	$stmt = $conn->prepare($query);
 	$stmt->execute(array($id));
 	$preferences = $stmt->fetchAll();
 	echo json_encode($preferences);
?>