<?php
 include_once('../../config/init.php');
 include_once($BASE_DIR .'database/users.php');
 include_once($BASE_DIR .'database/admin.php');

 if (!isset($_SESSION["username"]) || !isset($_POST['id-user']) || empty($_POST['id-user'])) {
 	$_SESSION['error_messages'][] = 'Falha ao apagar utilizador';
    header('Location: ../../pages/home.php');
    exit;
 } else {
     
    if(!(isAdmin($_SESSION["username"]) == 1)){
        $_SESSION['error_messages'][] = 'Não tens direitos suficientes para a acção pretendida';
    	header('Location: ../../pages/home.php');
    	exit;
    }
     
    $delete = getMemberById($_POST['id-user']);
	$username1 = $_SESSION["username"];
    $admin = getMemberByName($username1);
 	
    if (!isset($delete) || $delete == null) {
 		$_SESSION['error_messages'][] = 'Não podes apagar um utilizador que não existe';
    	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=2');
		exit;
 	}
     
    $username = $delete["nomeutilizador"];
     
 	if ($username1 == $username) {
 		$_SESSION['error_messages'][] = 'Não podes apagar te a ti próprio';
    	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=2');
		exit;
 	}

 	deleteUser($delete);
 	$_SESSION['form_values'] = $_POST;
 	$_SESSION['success_messages'][] = 'Utilizador ' . $username . ' eliminado';
 	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=2');
 }
?>