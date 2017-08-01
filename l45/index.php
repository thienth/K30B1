<?php 
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

$stmt = $connect->prepare("select * from users");
$stmt->execute();
$result = $stmt->fetchAll();

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
 	<table>
 		<thead>
 			<tr>
 				<th>#</th>
 				<th>Email</th>
 				<th>Full name</th>
 				<th>Avatar</th>
 				<th>Address</th>
 				<th></th>
 			</tr>
 		</thead>
 		<tbody>
 		<?php 
 			$count = 0;
 			foreach ($result as $v) {
 				$count++;
 				?>
				<tr>
	 				<td><?= $count?></td>
	 				<td><?= $v['email']?></td>
	 				<td><?= $v['name']?></td>
	 				<td><?= $v['avatar']?></td>
	 				<td><?= $v['address']?></td>
	 				<td></td>
	 			</tr>
 				<?php
 			}

 		 ?>
 			
 		</tbody>
 	</table>

 	<fieldset>
 		<legend>Create new user</legend>
 		<form action="save-user.php" method="post">
	 		<div>
	 			<label for="">Email:</label>
	 			<input type="text" name="email" placeholder="Email">
	 		</div>
	 		<div>
	 			<label for="">Password:</label>
	 			<input type="password" name="password" placeholder="Password">
	 		</div>
	 		<div>
	 			<label>Confirm Password:</label>
	 			<input type="password" name="cf-password" placeholder="Confirm Password">
	 		</div>
	 		<div>
	 			<label>Role:</label>
	 			<input type="radio" name="role_id" value="100"> <label>Student</label>
	 			<input type="radio" name="role_id" value="500"> <label>Supervisor</label>
	 			<input type="radio" name="role_id" value="900"> <label>Super admin</label>
	 		</div>
	 		<div>
	 			<label>Full name:</label>
	 			<input type="text" name="name" placeholder="Full name">
	 		</div>
	 		<div>
	 			<label>Address:</label>
	 			<input type="text" name="address" placeholder="Address">
	 		</div>
	 		<div>
	 			<button type="submit">Save</button>
	 		</div>

 		</form>
 	</fieldset>
 </body>
 </html>

