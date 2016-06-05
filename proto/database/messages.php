<?php

function sendMessage($senderId, $receiverId, $texto) {
  global $conn;
  $stmt = $conn->prepare("INSERT INTO Mensagem (idEmissor, idRecetor, texto) VALUES (?, ?, ?)");
  $stmt->execute(array($senderId, $receiverId, $texto));
}

?>