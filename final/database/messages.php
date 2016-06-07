<?php

function sendMessage($senderId, $receiverId, $texto) {
  global $conn;
  $stmt = $conn->prepare("INSERT INTO Mensagem (idEmissor, idRecetor, texto) VALUES (?, ?, ?)");
  $stmt->execute(array($senderId, $receiverId, $texto));
}

function sendMessageAdmins($idsender, $admins, $texto) {
  global $conn; 
  $count = count($admins);
  
  for($i = 0; $i < $count; $i++){
    $stmt = $conn->prepare("INSERT INTO Mensagem (idEmissor, idRecetor, texto) VALUES (?, ?, ?)");
    $stmt->execute(array($idsender, $admins[$i]['idutilizador'], $texto));
  }
  
  return;
}

?>