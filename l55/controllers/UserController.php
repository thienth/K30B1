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
	
	function updateUser()
	{
		$id = $_GET['id'];
		$model = UserModel::find($id);
		if($model == null){
			header('location: index.php');die;
		}
		include 'views/user/update-user-form.php';
	}
	
	function removeUser()
	{
		$id = $_GET['id'];

		$model = UserModel::find($id);
		if($model){
			$model->delete();
		}

		header('location: index.php');
	}

	function saveUser()
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$roleId = $_POST['role_id'];
		$address = $_POST['address'];
		$file = $_FILES['avatar'];
		$fileName = "";
		if($file['size'] > 0){
			$fileName = "uploads/" . uniqid() . "-" . $file['name'];
			move_uploaded_file($file['tmp_name'], $fileName);
		}

		$model = new UserModel();
		$model->email = $email;
		$model->password = md5($password);
		$model->name = $name;
		$model->role_id = $roleId;
		$model->address = $address;
		$model->avatar = $fileName;

		$model->save();
		header('location: index.php');
		
	}

	function saveUpdateUser()
	{
		$id = $_POST['id'];
		$email = $_POST['email'];
		$name = $_POST['name'];
		$roleId = $_POST['role_id'];
		$address = $_POST['address'];
		$file = $_FILES['avatar'];

		$model = UserModel::find($id);
		$model->email = $email;
		$model->name = $name;
		$model->role_id = $roleId;
		$model->address = $address;
		$fileName = "";
		if($file['size'] > 0){
			$fileName = "uploads/" . uniqid() . "-" . $file['name'];
			move_uploaded_file($file['tmp_name'], $fileName);
			$model->avatar = $fileName;
		}
		$model->save();
		header('location: index.php');
	}
}

 ?>