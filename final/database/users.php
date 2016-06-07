<?php

function createUser($name, $username, $email, $password, $birthday) {
  global $conn;
  $type = 'Cliente';
  $stmt = $conn->prepare("INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->execute(array($username, $email, sha1($password), $birthday, $name, $type));
}

function unreadNotifications($name) {
  global $conn;
  $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM Notificacao, Membro WHERE Notificacao.idUtilizador = Membro.idUtilizador AND Notificacao.read = false AND Membro.nomeUtilizador = ?");
  $stmt->execute(array($name));
  $result = $stmt->fetch();    
  return $result['count'];
}

function getAuctionerByAuctionId($id) {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM Membro WHERE idUtilizador IN (SELECT idLeiloeiro FROM Leilao WHERE idLeilao = ?)");
  $stmt->execute(array($id));
  $result = $stmt->fetch();
  $result['datainscricao'] = date('Y-m-d', strtotime($result['datainscricao']));
  return $result;
}

function getMemberByName($name) {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM Membro WHERE nomeUtilizador = ?");
  $stmt->execute(array($name));
  return $stmt->fetch();
}

function userIsBanned($id) {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM membrobanido WHERE idmembrobanido = ?");
  $stmt->execute(array($id));
  $result = $stmt->fetch();
  if ($result['idmembrobanido'] == null) {
    return false;
  } else {
    $datafinal = $result['datafinal'];
    return time() < strtotime($datafinal);
  }
}

function getMemberById($id) {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM Membro WHERE idUtilizador = ?");
  $stmt->execute(array($id));
  return $stmt->fetch();
}

function isLoginCorrect($username, $password) {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM Membro WHERE nomeUtilizador = ? AND password = ?");
  $stmt->execute(array($username, sha1($password)));
  return $stmt->fetch() == true;
}

function makeBid($auctionId, $clientId, $bid) {
  global $conn;
  $stmt = $conn->prepare("INSERT INTO Licitacao (idleilao, idcliente, valor) VALUES (?, ?, ?)");
  $stmt->execute(array($auctionId, $clientId, $bid));
}

function getHomePreferences($id) {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM Marca WHERE idMarca IN (SELECT idMarca FROM Preferencias WHERE idCliente = ?)");
  $stmt->execute(array($id));
  $homePreferences = $stmt->fetchAll();
  foreach ($homePreferences as &$brand) {
    $stmt = $conn->prepare("SELECT * FROM Leilao WHERE idMarca = ? LIMIT 8");
    $stmt->execute(array($brand['idmarca']));
    $auctions = $stmt->fetchAll();
    $brand['auctions'] = $auctions;
    foreach ($brand['auctions'] as &$auction) {
      $stmt = $conn->prepare("SELECT * FROM Imagem WHERE idleilao = ?");
      $stmt->execute(array($auction['idleilao']));
      $imagem = $stmt->fetch();
      $auction['imagelink'] = $imagem['link'];
    }
  }
  return $homePreferences;
}
?>
