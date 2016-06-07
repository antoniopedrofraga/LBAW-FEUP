<?php
 include_once('../../config/init.php');
 include_once($BASE_DIR .'database/users.php');
 include_once($BASE_DIR .'database/admin.php');

 if (!isset($_SESSION["username"]) || !isset($_POST['auctionid']) || empty($_POST['auctionid'])) {
 	$_SESSION['error_messages'][] = 'Não podes eliminar um leimao que não existe';
    header('Location: ../../pages/home.php');
    exit;
 } else {
	 
	if(!(isAdmin($_SESSION["username"]) == 1)){
        $_SESSION['error_messages'][] = 'Não tens direitos suficientes para a acção pretendida';
    	header('Location: ../../pages/home.php');
    	exit;
    }
    
    $username1 = $_SESSION["username"];
    $admin = getMemberByName($username1);
	 
	$idleilao = empty($_POST['auctionid']) ? '' : $_POST['auctionid'];
	$idleiloeiro = empty($_POST['auctionerid']) ? '' : $_POST['auctionerid'];

 	deleteAuction($idleilao, $idleiloeiro);
     
 	$_SESSION['form_values'] = $_POST;
 	$_SESSION['success_messages'][] = 'Leilao ' . $idleilao . ' eliminado';
 	header('Location: ../../pages/admin.php?id='. $admin["idutilizador"] .'&tab=1');
 }
?>