<?php 
session_start();
require_once 'commons/utils.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/UserController.php';

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

switch ($url) {
	case '/':
		$ctl = new HomeController();
		$ctl->index();
		break;
	case 'detail':
		$ctl = new HomeController();
		$ctl->detailProduct();
		break;
	case 'create':
		$ctl = new UserController();
		$ctl->createUser();
		break;
	case 'update-user':
		$ctl = new UserController();
		$ctl->updateUser();
		break;
	case 'save-user':
		$ctl = new UserController();
		$ctl->saveUser();
		break;
	case 'save-update-user':
		$ctl = new UserController();
		$ctl->saveUpdateUser();
		break;
	case 'remove-user':
		$ctl = new UserController();
		$ctl->removeUser();
		break;
	
	default:
		echo "404 notfound page";
		// require '/View/404-notfound.php';
		break;
}

 ?>