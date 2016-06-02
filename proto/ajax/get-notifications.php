<?php
	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'TB38Y0K5'); //FIXME
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$conn->exec('SET SCHEMA \'proto\'');

  	$username = $_GET["username"];

  	$query = "SELECT * FROM Notificacao, Membro WHERE Notificacao.idUtilizador = Membro.idUtilizador AND Membro.nomeUtilizador = '" . $username . "'";
  	//"SELECT * FROM Leilao WHERE nome LIKE '%" . $string . "%' LIMIT 5";
  	$stmt = $conn->prepare($query);
 	$stmt->execute();
 	$notifications = $stmt->fetchAll();
 	echo json_encode($notifications);
?>