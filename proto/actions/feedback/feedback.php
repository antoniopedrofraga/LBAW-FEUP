<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');
include_once($BASE_DIR .'database/messages.php');

if (!isset($_SESSION["username"]) || !isset($_POST['auctionid']) || empty($_POST['auctionid']) || !isset($_POST['auctionerusername']) || empty($_POST['auctionerusername']) || !isset($_POST['text']) || !isset($_POST['value']) || empty($_POST['value'])) {
	$_SESSION['error_messages'][] = 'Não podes dar feedback sem um valor';
	header('Location: ../../pages/home.php');
	exit;
} else {
	$auctionId = $_POST['auctionid'];
	$username = $_POST['auctionerusername'];
	$text = $_POST['text'];
	$value = $_POST['value'];
	$me = getMemberByName($_SESSION["username"]);
	$auctioner = getMemberByName($username);

	global $conn;
	$stmt = $conn->prepare("INSERT INTO feedback (texto, valor) VALUES (?, ?) RETURNING idfeedback");
	$stmt->execute(array($text, $value));
	$idfeedback = $stmt->fetch();
	$stmt = $conn->prepare("INSERT INTO feedbackcomprador (idfeedback, idcomprador) VALUES (?, ?)");
	$stmt->execute(array($idfeedback, $me['idutilizador']));
	$stmt = $conn->prepare("UPDATE leilao feedbackcomprador (idfeedback, idcomprador) VALUES (?, ?)");

	$_SESSION['success_messages'][] = 'Licitação efectuada com sucesso';
}
?>