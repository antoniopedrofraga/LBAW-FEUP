<?php
 include_once('../../config/init.php');
 include_once($BASE_DIR .'database/users.php');
 include_once($BASE_DIR .'database/admin.php');

 if (!isset($_SESSION["username"]) || !isset($_POST['id-user-unBanUser']) || empty($_POST['id-user-unBanUser'])) {
 	$_SESSION['error_messages'][] = 'Falha ao retirar utilizador de banido';
    header('Location: ../../pages/home.php');
    exit;
 } else {
     
    if(!(isAdmin($_SESSION["username"]) == 1)){
        $_SESSION['error_messages'][] = 'Não tens direitos suficientes para a acção pretendida';
    	header('Location: ../../pages/home.php');
    	exit;
    }
     
    $unBanUser = getMemberById($_POST['id-user-unBanUser']);     
    $username1 = $_SESSION["username"];
    $admin = getMemberByName($username1);
 	
    if (!isset($unBanUser) || $unBanUser == null) {
 		$_SESSION['error_messages'][] = 'Não podes retirar um utilizador que não existe de banido';
    	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=2');
    	exit;
 	}

    $username = $unBanUser["nomeutilizador"];
     
 	if ($username1 == $username) {
 		$_SESSION['error_messages'][] = 'Não podes retirar-te de banido';
    	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=2');
    	exit;
 	}

 	unBanUser($unBanUser);
 	$_SESSION['form_values'] = $_POST;
 	$_SESSION['success_messages'][] = 'Utilizador ' . $username . ' administrado';
 	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=2');
 }
?>