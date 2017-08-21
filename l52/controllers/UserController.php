<?php 
require_once 'models/UserModel.php';
/**
* 
*/
class UserController
{
	
	function createUser()
	{
		$model = new UserModel();

		include 'views/user/form.php';
	}

	function saveUser()
	{
		var_dump(1);die;
		$model = new UserModel();

		include 'views/user/form.php';
	}
}

 ?>