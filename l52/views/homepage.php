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
			<th>Id</th>
			<th>Email</th>
			<th>Name</th>
			<th>Address</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		foreach ($users as $key => $value) {
			echo "<tr>";
			echo "<td>$value->id</td>";
			echo "<td>$value->email</td>";
			echo "<td>$value->name</td>";
			echo "<td>$value->address</td>";
			echo "</tr>";
		}
		 ?>
	</tbody>
</table>
	
</body>
</html>