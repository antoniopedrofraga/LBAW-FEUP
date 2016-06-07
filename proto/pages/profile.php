<?php
    include_once('../config/init.php');
 
    if (!isset($_SESSION["username"]) || !isset($_GET['id']) || empty($_GET['id']) || !isset($_GET['tab']) || empty($_GET['tab']) || (int)$_GET['tab'] < 1 || (int)$_GET['tab'] > 6) {
    	header('Location: ./home.php');
    } else {
    	include_once('../database/auctions.php');
    	include_once('../database/users.php');
    	$id = (int)$_GET['id'];
        $tab = (int)$_GET['tab'];
    	$username = $_SESSION["username"];
        $user = getMemberByName($username);
        
        if ($user['idutilizador'] != $id) {
            $_SESSION['error_messages'][] = 'Não pode aceder a um perfil que não o seu';
            header('Location: ../pages/home.php');
        }
        $counter = unreadNotifications($username);

        if ($user['tipomembro'] == 'Admin') {
            $_SESSION['error_messages'][] = 'Não pode aceder a um perfil de Cliente sendo um Administrador';
            header('Location: ../pages/home.php');
        }

        $smarty->assign('username', $_SESSION["username"]);
        $smarty->assign('notifCounter', $counter);
        $smarty->assign('user', $user);
        $smarty->assign('tabIndex', $tab);
        $smarty->assign('id', $id);
    	$smarty->display('home/profile.tpl');
    }
?>