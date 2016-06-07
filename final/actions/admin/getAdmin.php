<?php
 include_once('../../config/init.php');
 include_once($BASE_DIR .'database/users.php');
 include_once($BASE_DIR .'database/admin.php');

 if (!isset($_SESSION["username"]) || !isset($_POST['id-user-getadmin']) || empty($_POST['id-user-getadmin'])) {
 	$_SESSION['error_messages'][] = 'Falha ao tornar utilizador administrador';
    header('Location: ../../pages/home.php');
    exit;
 } else {
     
    if(!(isAdmin($_SESSION["username"]) == 1)){
        $_SESSION['error_messages'][] = 'Não tens direitos suficientes para a acção pretendida';
    	header('Location: ../../pages/home.php');
    	exit;
    }
    
    $beAdmin = getMemberById($_POST['id-user-getadmin']);     
    $username1 = $_SESSION["username"];
    $admin = getMemberByName($username1);
 	
    if (!isset($beAdmin) || $beAdmin == null) {
 		$_SESSION['error_messages'][] = 'Não podes tornar administrador um utilizador que não existe';
    	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=2');
    	exit;
 	}

    $username = $beAdmin["nomeutilizador"];
     
 	if ($username1 == $username) {
 		$_SESSION['error_messages'][] = 'Não podes tornar te administrador';
    	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=2');
    	exit;
 	}

 	getAdmin($beAdmin);
 	$_SESSION['form_values'] = $_POST;
 	$_SESSION['success_messages'][] = 'Utilizador ' . $username . ' administrado';
 	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=2');
 }
?>