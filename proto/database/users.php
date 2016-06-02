<?php

function createUser($name, $username, $email, $password, $birthday) {
  global $conn;
  $type = 'Cliente';
  $stmt = $conn->prepare("INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->execute(array($username, $email, sha1($password), $birthday, $name, $type));
}

function unreadNotifications($name) {
  global $conn;
  $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM Notificacao, Membro WHERE Notificacao.idUtilizador = Membro.idUtilizador AND Membro.nomeUtilizador = ?");
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

function isLoginCorrect($username, $password) {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM Membro WHERE nomeUtilizador = ? AND password = ?");
  $stmt->execute(array($username, sha1($password)));
  return $stmt->fetch() == true;
}
?>
