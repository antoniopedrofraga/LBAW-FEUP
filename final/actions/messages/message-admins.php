<?php

 include_once('../../config/init.php');
 include_once($BASE_DIR .'database/users.php');
 include_once($BASE_DIR .'database/messages.php');
 include_once($BASE_DIR .'database/admin.php');

 if (!isset($_SESSION["username"]) || !isset($_POST['mensagem']) || empty($_POST['mensagem'])) {
 	$_SESSION['error_messages'][] = 'Não podes enviar uma mensagem sem todos os campos preenchidos';
    header('Location: ../../pages/home.php');
    exit;
 } else {
   echo("arg");
 	$username = $_SESSION["username"];
    
 	if ($username1 == $username) {
 		$_SESSION['error_messages'][] = 'Não podes enviar uma mensagem para ti próprio';
    	header('Location: '.$_SERVER['REQUEST_URI']);
    	exit;
 	}
     echo("arg");
 	$sender = getMemberByName($username);
     echo("arg");
    $admins = getAdmins();
echo("arg");
 	$texto = $_POST['mensagem'];echo("arg");
 	sendMessageAdmins($sender['idutilizador'], $admins, $texto);
 	$_SESSION['form_values'] = $_POST;
 	$_SESSION['success_messages'][] = 'Mensagem enviada para o utilizador ' . $username2;
 	header('Location: ../../pages/home.php');
 }
?>