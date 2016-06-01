<?php
    include_once('../config/init.php');
    if (!isset($_SESSION["username"])) {
    	$smarty->display('visitor/visitor.tpl');
    } else {

    	include_once('../database/auctions.php');
  		$recentAuctions = getRecentAuctions();
      $auctionsByBid = getAuctionsByBid();
  		$auctionsCount = getAuctionsCount();

  		$smarty->assign('recentAuctions', $recentAuctions);
      $smarty->assign('auctionsByBid', $auctionsByBid);
  		$smarty->assign('auctionsCount', $auctionsCount);
    	$smarty->display('home/home.tpl');

    }
?>