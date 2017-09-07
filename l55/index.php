<?php 
session_start();
require_once 'commons/utils.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/admin/CategoryController.php';
require_once 'controllers/admin/ProductController.php';

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
	case 'cate':
		$ctl = new HomeController();
		$ctl->detailCategory();
		break;
	case 'admin/category/add':
		$ctl = new CategoryController();
		$ctl->addCateForm();
		break;
	case 'admin/product':
		$ctl = new ProductController();
		$ctl->index();
		break;
	case 'admin/product/add':
		$ctl = new ProductController();
		$ctl->add();
		break;
	case 'admin/product/edit':
		$ctl = new ProductController();
		$ctl->edit();
		break;
	case 'admin/product/save':
		$ctl = new ProductController();
		$ctl->save();
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