<?php 
/**
* 
*/
require_once 'models/UserModel.php';
class HomeController
{
	
	function index(){
		$users = UserModel::all();
		include 'views/homepage.php';
	}
}

 ?>