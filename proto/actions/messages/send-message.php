<?php
 include_once('../../config/init.php');
 include_once($BASE_DIR .'database/users.php');
 include_once($BASE_DIR .'database/messages.php');

 if (!isset($_SESSION["username"]) || !isset($_POST['username']) || empty($_POST['username']) || !isset($_POST['message']) || empty($_POST['message'])) {
 	$_SESSION['error_messages'][] = 'Não podes enviar uma mensagem sem todos os campos preenchidos';
    header('Location: ../../pages/home.php');
    exit;
 } else {
 	$username1 = $_SESSION["username"];

 	if ($username1 == $username) {
 		$_SESSION['error_messages'][] = 'Não podes enviar uma mensagem para ti próprio';
    	header('Location: '.$_SERVER['REQUEST_URI']);
    	exit;
 	}


 	$username2 =  htmlentities($_POST['username']);
 	$sender = getMemberByName($username1);
 	$receiver = getMemberByName($username2);

 	if (!isset($receiver) || $receiver == null) {
 		$_SESSION['error_messages'][] = 'Não podes enviar uma mensagem a um utilizador que não existe';
    	header('Location: ../../pages/home.php');
    	exit;
 	}

 	$texto =  htmlentities($_POST['message']);
 	sendMessage($sender['idutilizador'], $receiver['idutilizador'], $texto);
 	$_SESSION['form_values'] = $_POST;
 	$_SESSION['success_messages'][] = 'Mensagem enviada para o utilizador ' . $username2;
 	header('Location: ../../pages/home.php');
 }
?>