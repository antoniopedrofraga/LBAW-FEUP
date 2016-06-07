<?php

	$conn = new PDO('pgsql:host=dbm;dbname=lbaw1512', 'lbaw1512', 'queremos20'); //FIXME
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec('SET SCHEMA \'final\'');

	$auctionid = $_POST["auctionid"];
	$auctionerid = $_POST["auctionerid"];

	$query = "DELETE FROM Leilao WHERE idleilao = ? AND idleiloeiro = ?";
	$stmt = $conn->prepare($query);
	$stmt->execute(array($auctionid, $auctionerid));
?>