<?php
	try {

	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$conn->exec('SET SCHEMA \'proto\'');

  	$brandid = $_GET["brandId"];
    $userid = $_GET["userId"];
  	$checked = $_GET["checked"];

    if ($checked == 'true') {
      $query = "INSERT INTO Preferencias (idMarca, idCliente) VALUES (?, ?)";
    } else if ($checked == 'false') {
      $query = "DELETE FROM Preferencias WHERE idMarca = ? AND idCliente = ?";
    }
  	$stmt = $conn->prepare($query);
 	  $stmt->execute(array($brandid, $userid));
 	  $stmt->fetchAll();

 	} catch (PDOException $e) {
    	print $e->getMessage ();
    	echo false;
	}

	echo true;
?>