<?php 
$email = isset($_POST['email']) == true ? $_POST['email'] : null;
$password = isset($_POST['password']) == true ? $_POST['password'] : null;
$cfpassword = isset($_POST['cf-password']) == true ? $_POST['cf-password'] : null;
$name = isset($_POST['name']) == true ? $_POST['name'] : null;
$role_id = isset($_POST['role_id']) == true ? $_POST['role_id'] : null;
$address = isset($_POST['address']) == true ? $_POST['address'] : null;

if($email == null){
	echo "Email invalid!";die;
}

if($password == null || $password == "" || $password != $cfpassword){
	echo "Password/Confirm password invalid!";die;
}

$query = "insert into users 
			(email, password, role_id, name, address)
			values 
			(\'$email\', \'$password\', $role_id, \'$name\', \'$address\')";
var_dump($query);


 ?>