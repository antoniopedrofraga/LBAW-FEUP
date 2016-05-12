 <?php

 function getRecentAuctions() {
 	global $conn;
 	$stmt = $conn->prepare("SELECT * FROM Leilao ORDER BY dataColocacao DESC LIMIT 4");
 	$stmt->execute();
 	return $stmt->fetchAll();
 }

 function getAuctionsByBid() {
 	global $conn;
 	$stmt = $conn->prepare("SELECT * FROM Leilao ORDER BY licitacaoAtual DESC LIMIT 4");
 	$stmt->execute();
 	return $stmt->fetchAll();
 }

 function getAuctionsCount() {
 	global $conn;
 	$stmt = $conn->prepare("SELECT COUNT(*) AS count FROM Leilao");
 	$stmt->execute();
 	$result = $stmt->fetch();    
    return $result['count'];
 }

 function getTime($date, $duration) {
 	//$date->modify('+' . duration . ' day');
 	$now = new DateTime();
 	$interval = $date->diff($now);
 	return $date;//$interval->format("%a dias, %h horas, %i minutos");
 }

 function addDayswithdate($date,$days){
    $date = strtotime("+".$days." days", strtotime($date));
    return  date("Y-m-d", $date);
}

 ?>