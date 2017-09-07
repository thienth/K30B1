<?php 
session_start();
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
$msg = "";
$token = isset($_COOKIE['LOGIN_TOKEN']) == true ? $_COOKIE['LOGIN_TOKEN'] : false;
// var_dump($token);die;
if($token != false){

	$stmt = $connect->prepare("select * from users where remember_token = :token and expire_date >= :expire_date");
	$stmt->bindValue(':token', $token);
	$stmt->bindValue(':expire_date', date('Y-m-d h:m:s'));
	$stmt->execute();
	$result = $stmt->fetch();
	// var_dump($result);die;
	if($result != false){
		$_SESSION['userinfo'] = $result;
		header('location: index.php');
		die;
	}
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$email = isset($_POST['email']) == true ? $_POST['email'] : "";
	$password = isset($_POST['password']) == true ? $_POST['password'] : "";
	$remmember = isset($_POST['remmember']) == true ? $_POST['remmember'] : "0";
	if($email == "" || $password == ""){
		$msg = "Dữ liệu không hợp lệ!";
	}else{
		
		$stmt = $connect->prepare("select * from users where email = :email and password = :password");
		$stmt->bindValue(':email', $email);
		$stmt->bindValue(':password', md5($password));
		$stmt->execute();
		$result = $stmt->fetch();

		if(!$result){
			$msg = "Sai Email/password!";
		}else{

			if($remmember == 1){
				$token = md5($result['email'].time());
				setcookie("LOGIN_TOKEN", $token, time()+(3600*24*30), '/');
				$stmt = $connect->prepare("update users 
											set remember_token = :token,
												expire_date = :expire_date
											where id = :id");
				$stmt->bindValue(':token', $token);
				$stmt->bindValue(':expire_date', date('Y-m-d h:m:s', time()+(3600*24*30)));
				$stmt->bindValue(':id', $result['id']);
				$stmt->execute();

			}

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
 			<input type="checkbox" name="remmember" value="1"> Remmember &nbsp;
 			<button type="submit">Login</button>
 		</div>
 	</form>
 </body>
 </html>