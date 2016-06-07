<?php

function sendMessage($senderId, $receiverId, $texto) {
  global $conn;
  $stmt = $conn->prepare("INSERT INTO Mensagem (idEmissor, idRecetor, texto) VALUES (?, ?, ?)");
  $stmt->execute(array($senderId, $receiverId, $texto));
}

function sendMessageAdmins($idsender, $admins, $texto) {
  global $conn; echo($idsender);echo("  ");
  $count = count($admins[0]);
  for($i = 1; $i <= $count; $i++){
     echo($admins[$i]['idutilizador']);echo("  ");
    $stmt = $conn->prepare("INSERT INTO Mensagem (idEmissor, idRecetor, texto) VALUES (?, ?, ?)");
    $stmt->execute(array($idsender, $admins[$i]['idutilizador'], $texto));
  }
  return;
}

?>