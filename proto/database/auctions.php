 <?php

 function getRecentAuctions() {
 	global $conn;
 	$stmt = $conn->prepare("SELECT * FROM Leilao ORDER BY dataColocacao DESC LIMIT 8");
 	$stmt->execute();
  $result = $stmt->fetchAll();
  foreach ($result as &$auction) {
    $stmt = $conn->prepare("SELECT * FROM Imagem WHERE idleilao = ?");
    $stmt->execute(array($auction['idleilao']));
    $imagem = $stmt->fetch();
    $auction['imagelink'] = $imagem['link'];
  }
  return $result;
}

function getAuctionsByBid() {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM Leilao ORDER BY licitacaoAtual DESC LIMIT 8");
  $stmt->execute();
  $result = $stmt->fetchAll();
  foreach ($result as &$auction) {
    $stmt = $conn->prepare("SELECT * FROM Imagem WHERE idleilao = ?");
    $stmt->execute(array($auction['idleilao']));
    $imagem = $stmt->fetch();
    $auction['imagelink'] = $imagem['link'];
  }
  return $result;
}

function getAuctionById($id) {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM Leilao WHERE idLeilao = " . $id . " LIMIT 1");
  $stmt->execute();
  return $stmt->fetchAll();
}

function getAuctionCountByUserId($id) {
  global $conn;
  $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM Leilao WHERE idLeiloeiro = " . $id . " LIMIT 1");
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result[0]['count'];
}

function getBrandIdByName($name) {
  global $conn;
  $stmt = $conn->prepare("SELECT idMarca FROM Marca WHERE nome = ?");
  $stmt->execute(array($name));
  $result = $stmt->fetch();    
  return $result['idmarca'];
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

function createAuction($username, $nomeleilao, $descricaobreve, $descricaocompleta, $licitacaobase, $marca, $datafinal, $paths) {
	global $conn;
	$member = getMemberByName($username);
	$memberid = $member['idutilizador'];
	$brandid = getBrandIdByName($marca);
	$stmt = $conn->prepare("INSERT INTO Leilao (nome, descricaoBreve, descricaoCompleta, licitacaoBase, dataFinal, idLeiloeiro, idMarca) VALUES (?, ?, ?, ?, ?, ?, ?) RETURNING idleilao");
 $stmt->execute(array($nomeleilao, $descricaobreve, $descricaocompleta, $licitacaobase, $datafinal, $memberid, $brandid));
 $result = $stmt->fetch();
 $idleilao = $result['idleilao'];
 foreach ($paths as $path) {
  $stmt = $conn->prepare("INSERT INTO Imagem (idleilao, link) VALUES (?, ?)");
  $stmt->execute(array($idleilao, $path));
}
}
?>