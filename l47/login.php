<?php 
session_start();
$msg = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$email = isset($_POST['email']) == true ? $_POST['email'] : "";
	$password = isset($_POST['password']) == true ? $_POST['password'] : "";
	
	if($email == "" || $password == ""){
		$msg = "Dữ liệu không hợp lệ!";
	}else{
		$servername = '127.0.0.1';
		$dbname = 'k30dl';
		$dbuser = 'root';
		$dbpassword = '123456';

		try{
			$connect = new PDO("mysql:servername=$servername;dbname=$dbname;charset=utf8", $dbuser, $dbpassword);
		}catch(Exception $ex){
			echo $ex->getMessage();
			die;
		}

		$stmt = $connect->prepare("select * from users where email = :email and password = :password");
		$stmt->bindValue(':email', $email);
		$stmt->bindValue(':password', md5($password));
		$stmt->execute();
		$result = $stmt->fetch();
		if(!$result){
			$msg = "Sai Email/password!";
		}else{
			$_SESSION['userinfo'] = $result;
			header('location: index.php');
			die;
		}
	}


}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Login page</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<form method="post" >
 		<span style="color: red;"><?= $msg ?></span>
 		<div>
 			Email: <input type="text" name="email" value="" placeholder="Email">
 		</div>
 		<div>
 			Password: <input type="password" name="password" value="" placeholder="Password">
 		</div>
 		<div>
 			<button type="submit">Login</button>
 		</div>
 	</form>
 </body>
 </html>