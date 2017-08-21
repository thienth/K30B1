<?php 
session_start();
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

switch ($url) {
	case '/':
		require_once 'HomepageController.php';
		$ctl = new HomepageController();
		$ctl->index();
		break;
	case 'create-user':
		require_once 'UserController.php';
		$ctl = new UserController();
		$ctl->createForm();
		break;
	
	default:
		require '/View/404-notfound.php';
		break;
}

 ?>