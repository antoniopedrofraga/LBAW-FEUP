<?php
    include_once('../config/init.php');

    if (!isset($_SESSION["username"]) || !isset($_GET['id']) || empty($_GET['id'])) {
    	header('Location: ./home.php');
    } else {
    	include_once('../database/auctions.php');
    	include_once('../database/users.php');
    	$id = (int)$_GET['id'];
    	$name = $_SESSION["username"]; 

        $auctionerObj = getAuctionerByAuctionId($id);
    	$result = getAuctionById($id);
        $auctionCounter = getAuctionCountByUserId($auctionerObj['idutilizador']);
        $counter = unreadNotifications($name);
        $user = getMemberByName($name);
        
        $smarty->assign('user', $user);
        $smarty->assign('username', $_SESSION["username"]);
    	$smarty->assign('notifCounter', $counter);
        $smarty->assign('auctioner', $auctionerObj);
        $smarty->assign('auctionCount', $auctionCounter);
    	$smarty->assign('auction', $result[0]);
    	$smarty->display('home/auction.tpl');
    }

?>