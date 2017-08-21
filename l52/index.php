<?php 
session_start();
require_once 'controllers/HomeController.php';

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

switch ($url) {
	case '/':
		$ctl = new HomeController();
		$ctl->index();
		break;
	case 'create-user':
		echo "Create user form";
		// require_once 'UserController.php';
		// $ctl = new UserController();
		// $ctl->createForm();
		break;
	
	default:
		echo "404 notfound page";
		// require '/View/404-notfound.php';
		break;
}

 ?>