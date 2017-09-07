<?php 
/**
* 
*/
require_once 'models/UserModel.php';
class HomeController
{
	
	function index(){
		
		include_once 'views/layouts/client/header.php';
		include 'views/homepage.php';
		include_once 'views/layouts/client/footer.php';
	}
}

 ?>