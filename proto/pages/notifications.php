<?php
include_once('../config/init.php');

if (!isset($_SESSION["username"])) {
   header('Location: ./home.php');
} else {
   include_once('../database/auctions.php');
   include_once('../database/users.php');
   $id = (int)$_GET['id'];
   $name = $_SESSION["username"]; 

   $counter = unreadNotifications($name);

   $smarty->assign('username', $_SESSION["username"]);
   $smarty->assign('notifCounter', $counter);

   $smarty->display('home/notifications.tpl');
}

?>