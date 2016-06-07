<?php
 include_once('../../config/init.php');
 include_once($BASE_DIR .'database/users.php');
 include_once($BASE_DIR .'database/admin.php');

 if (!isset($_SESSION["username"]) || !isset($_POST['id-user-banish']) || empty($_POST['id-user-banish'])) {
 	$_SESSION['error_messages'][] = 'Não podes banir um utilizador sem todos os campos preenchidos';
    header('Location: ../../pages/home.php');
    exit;
 } else {
	 
	if(!(isAdmin($_SESSION["username"]) == 1)){
        $_SESSION['error_messages'][] = 'Não tens direitos suficientes para a acção pretendida';
    	header('Location: ../../pages/home.php');
    	exit;
    }
	 
    $banish = getMemberById($_POST['id-user-banish']);
	$dataFim = empty($_POST['enddate']) ? '' : $_POST['enddate'];
	$motivo = empty($_POST['reasonbanned']) ? '' : $_POST['reasonbanned'];
	$username1 = $_SESSION["username"];
    $admin = getMemberByName($username1);
	
    if (!isset($banish) || $banish == null ) {
 		$_SESSION['error_messages'][] = 'Não podes banir um utilizador que não existe';
    	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=2');
    	exit;
 	}
 	
    $username = $banish["nomeutilizador"];
	 
 	if ($username1 == $username) {
 		$_SESSION['error_messages'][] = 'Não podes banir te a ti próprio';
    	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=2');
    	exit;
 	}

 	banishUser($banish, $dataFim, $motivo );
	
 	$_SESSION['form_values'] = $_POST;
 	$_SESSION['success_messages'][] = 'Utilizador ' . $username . ' banido';
 	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=2');
 }
?>