<?php 
$user = ['id' => 1, 'name' => 'Mai Tú Anh', 'phone_number' => '0987654321'];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<form action="index.php" method="get">
 		<input type="hidden" name="id" value="<?= $user['id'] ?>">
 		<div>
 			<input type="text" name="name" value="<?= $user['name'] ?>" placeholder="User name">
 		</div>
 		<div>
 			<input type="text" name="phone_number" value="<?= $user['phone_number'] ?>" placeholder="phone_number">
 		</div>
 		<div>
 			<button type="submit">Lưu</button>
 		</div>
 	</form>
 	
 </body>
 </html>