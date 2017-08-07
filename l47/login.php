<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){

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