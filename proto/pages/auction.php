<?php
    include_once('../config/init.php');

    if (!isset($_SESSION["username"]) || !isset($_GET['id']) || empty($_GET['id'])) {
    	header('Location: ./home.php');
    } else {
    	include_once('../database/auctions.php');
    	include_once('../database/users.php');
    	$id = (int)$_GET['id'];
    	$name = $_SESSION["username"]; 

    	$counter = unreadNotifications($id);
    	$result = getAuctionById($id);
    	$smarty->assign('notifCounter', $counter);
    	$smarty->assign('auction', $result[0]);
    	$smarty->display('home/auction.tpl');
    }

?>