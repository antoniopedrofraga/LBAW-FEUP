<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');
include_once($BASE_DIR .'database/messages.php');

if (!isset($_SESSION["username"]) || !isset($_POST['auctionid']) || empty($_POST['auctionid']) || !isset($_POST['bid']) || empty($_POST['bid'])) {
	$_SESSION['error_messages'][] = 'Não podes fazer uma licitação sem um valor';
	header('Location: ../../pages/home.php');
	exit;
} else {
	$user = getMemberByName($username);

	if (userIsBanned($user['idutilizador'])) {
		$_SESSION['error_messages'][] = 'Estás banido, portanto não podes licitar.';
		header('Location: ../../pages/home.php');
		exit;
	}
	$auctionId = $_POST['auctionid'];
	$bid = $_POST['bid'];
	$member = getMemberByName($_SESSION["username"]);
	makeBid($auctionId, $member['idutilizador'], $bid);
	$_SESSION['success_messages'][] = 'Licitação efectuada com sucesso';
}
?>