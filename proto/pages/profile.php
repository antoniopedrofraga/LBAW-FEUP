<?php
    include_once('../config/init.php');

    if (!isset($_SESSION["username"]) || !isset($_GET['id']) || empty($_GET['id'])) {
    	header('Location: ./home.php');
    } else {
    	include_once('../database/auctions.php');
    	include_once('../database/users.php');
    	$id = (int)$_GET['id'];
    	$_SESSION["username"];
        $smarty->assign('tabIndex', 0);
    	$smarty->display('home/profile.tpl');
    }

?>