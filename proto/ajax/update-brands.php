<?php
	try {

	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$conn->exec('SET SCHEMA \'proto\'');

  	$nome = $_GET["nome"];
  	$description = $_GET["description"];

 	$query = "UPDATE Preferencia SET descricaoMembro = ? WHERE idUtilizador = ?";
  	$stmt = $conn->prepare($query);
 	$stmt->execute(array($description, $id));
 	$stmt->fetchAll();

 	} catch (PDOException $e) {
    	print $e->getMessage ();
    	echo false;
	}

	echo true;
?>