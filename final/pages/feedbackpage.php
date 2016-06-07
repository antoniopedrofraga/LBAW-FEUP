<?php
    include_once('../config/init.php');

    if (!isset($_SESSION["username"]) || !isset($_GET['id']) || empty($_GET['id'])) {
    	header('Location: ./home.php');
    } else {
    	include_once('../database/auctions.php');
    	include_once('../database/users.php');
    	$id = (int)$_GET['id'];
    	$name = $_SESSION["username"]; 

        $counter = unreadNotifications($name);
        $user = getMemberById($id);
 
        $smarty->assign('username', $_SESSION["username"]);
    	$smarty->assign('notifCounter', $counter);
        $smarty->assign('user', $user);

    	$smarty->display('home/feedbackpage.tpl');
    }

?>