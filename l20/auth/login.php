<?php 
session_start();
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
	<form action="check-login.php" method="post" >
		<div>
			<input type="text" name="username" value="" placeholder="User name">
		</div>
		<div>
			<input type="password" name="password" placeholder="Password">
		</div>
		<div>
			<button type="submit">Login</button>
		</div>
	</form>
</body>
</html>