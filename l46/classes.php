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

$stmt = $connect->prepare("select * from classes");
$stmt->execute();
$rs = $stmt->fetchAll();

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
 				<th>Class name</th>
 				<th>Semester</th>
 				<th></th>
 			</tr>
 		</thead>
 		<tbody>
 		<?php 
 			$count = 0;
 			foreach ($rs as $v) {
 				$count++;
 				?>
				<tr>
	 				<td><?= $count?></td>
	 				<td><?= $v['class_name']?></td>
	 				<td><?= $v['semester_id']?></td>
	 				<td>
	 					<a href="remove-user.php?id=<?=$v['id']?>" title="">Remove</a>
	 					<a href="update-user.php?id=<?=$v['id']?>" title="">Update</a>
	 				</td>
	 			</tr>
 				<?php
 			}

 		 ?>
 			
 		</tbody>
 	</table>
 	<fieldset>
 		<legend>Create class</legend>
 		<form action="save-classes.php" method="post">
	 		<div>
	 			<label>Class name:</label>
	 			<input type="text" name="class_name" >
	 		</div>
	 		<div>
	 			<label>Semester:</label>
	 			<select name="semester_id" >
	 				<option value="1">Semester 1</option>
	 				<option value="2">Semester 2</option>
	 				<option value="3">Semester 3</option>
	 				<option value="4">Semester 4</option>
	 				<option value="5">Semester 5</option>
	 			</select>
	 		</div>
	 		<div>
	 			<button type="submit">Save</button>
	 		</div>

 		</form>
 	</fieldset>
 </body>
 </html>