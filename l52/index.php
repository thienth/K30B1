<?php 
session_start();
require_once 'controllers/HomeController.php';
require_once 'controllers/UserController.php';

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

switch ($url) {
	case '/':
		$ctl = new HomeController();
		$ctl->index();
		break;
	case 'create':
		$ctl = new UserController();
		$ctl->createUser();
		break;
	case 'save-user':
		$ctl = new UserController();
		$ctl->saveUser();
		break;
	
	default:
		echo "404 notfound page";
		// require '/View/404-notfound.php';
		break;
}

 ?>