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
			<th>Avatar</th>
			<th>Address</th>
			<th>
				<a href="create" title="">Create</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		foreach ($users as $key => $value) {
			echo "<tr>";
			echo "<td>$value->id</td>";
			echo "<td>$value->email</td>";
			echo "<td>$value->name</td>";
			echo "<td>
					<img src=" . $value->avatar . " width='100'>
				</td>";
			echo "<td>$value->address</td>";
			echo "<td>
				<a href='update-user?id=" . $value->id ."' >Update</a>
				<a href='remove-user?id=" . $value->id ."' >Remove</a>
			</td>";
			echo "</tr>";
		}
		 ?>
	</tbody>
</table>
	
</body>
</html>