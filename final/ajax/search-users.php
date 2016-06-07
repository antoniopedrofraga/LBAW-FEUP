<?php
	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$conn->exec('SET SCHEMA \'final\'');

    include_once('../database/admin.php');

  	$string = $_GET["text"];
	
	if($string == NULL){
		echo json_encode(getUsers());
	}else{
		echo json_encode(getSpecUsers($string));
	}
	
?>