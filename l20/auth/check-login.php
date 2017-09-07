<?php 
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// var_dump($username . ' -- ' . $password);
// die;
$data = [
	['id' => 1, 'username' => 'admin', 'password' => 'admin'],
	['id' => 2, 'username' => 'mod', 'password' => '1234'],
	['id' => 3, 'username' => 'member', 'password' => '4321'],
];
for ($i=0; $i < count($data); $i++) { 
	if($data[$i]['username'] == $username 
		&& $data[$i]['password'] == $password){
		$_SESSION['AUTH'] = $data[$i];
		break;	
	}else{
		unset($_SESSION['AUTH']);
	}
}

if(isset($_SESSION['AUTH'])){
	header('location: dashboard.php');
}else{
	header('location: login.php');
}

 ?>