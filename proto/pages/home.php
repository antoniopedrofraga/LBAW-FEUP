<?php
    include_once('../config/init.php');
    if (!isset($_SESSION["username"])) {
    	$smarty->display('visitor/visitor.tpl');
    } else {

    	include_once('../database/auctions.php');
      include_once('../database/users.php');

      $name = $_SESSION["username"];

  		$recentAuctions = getRecentAuctions();
      $auctionsByBid = getAuctionsByBid();
  		$auctionsCount = getAuctionsCount();

      $counter = unreadNotifications($name);

      $membro = getMemberByName($name);

      $homePreferences = getHomePreferences($membro['idutilizador']);

      $smarty->assign('notifCounter', $counter);
  		$smarty->assign('recentAuctions', $recentAuctions);
      $smarty->assign('auctionsByBid', $auctionsByBid);
  		$smarty->assign('auctionsCount', $auctionsCount);
      $smarty->assign('preferences', $homePreferences);
    	$smarty->display('home/home.tpl');

    }
?>