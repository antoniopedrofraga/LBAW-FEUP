<?php
 include_once('../../config/init.php');
 include_once($BASE_DIR .'database/users.php');
 if (!isset($_SESSION["username"]) || !isset($_GET['username']) || empty($_GET['username']) || $_SESSION["username"] != $_GET['username']) {
 	$_SESSION['error_messages'][] = 'This profile page is not yours';
    header('Location: ../../pages/home.php');
 } else {
 	$username = $_GET['username'];
 	$member = getMemberByName($username);
 	$type = $member['tipomembro'];
 	if ($type == "Admin") {
 		header('Location: ../../pages/admin.php?id=' . $member['idutilizador']);
 	} else if ($type == "Cliente") {
		header('Location: ../../pages/profile.php?id=' . $member['idutilizador']);
 	} else {
 		$_SESSION['error_messages'][] = 'Could not get your member type';
    	header('Location: ../../pages/home.php');
 	}
 }
?>