<?php 

// echo $_SERVER["REQUEST_METHOD"];
// echo $_POST['class'] . "<br>";
// echo $_POST['name'] . "<br>";


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
 	<form action="save.php" method="post">
 		<div>
 			<input type="number" name="numbera" placeholder="Number a">
 		</div>
 		<div>
 			<input type="number" name="numberb" placeholder="Number b">
 		</div>
 		<div>
 			<input type="number" name="numberc" placeholder="Number c">
 		</div>
		<div>
 			<button type="submit">Calculate</button>
		</div>
 	</form>
 </body>
 </html>





