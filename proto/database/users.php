<?php
  
  function createUser($name, $username, $email, $password, $birthday) {
    global $conn;
    $type = 'Cliente';
    $stmt = $conn->prepare("INSERT INTO Membro (nomeUtilizador, email, password, dataNascimento, nomeCivil, tipoMembro) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($username, $email, sha1($password), $birthday, $name, $type));
  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Membro WHERE nomeUtilizador = ? AND password = ?");
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() == true;
  }
?>
