<?php 
	$data = [
		['id' => 1, 'name' => 'Mai Tú Anh', 'phone_number' => '0987654321'],
		['id' => 2, 'name' => 'Nguyễn Thị Thuỳ Linh', 'phone_number' => '0123456789'],
		['id' => 3, 'name' => 'Nguyễn Quang Đô', 'phone_number' => ''],
		['id' => 4, 'name' => 'Vũ Đình Trong', 'phone_number' => 'không có'],
	];

	$id = isset($_GET['id']) == true ? $_GET['id'] : null;
	$name = isset($_GET['name']) == true ? $_GET['name'] : null;
	$phoneNumer = isset($_GET['phone_number']) == true ? $_GET['phone_number'] : null;

	if($id > 0){
		for ($i=0; $i < count($data); $i++) { 
			if($data[$i]['id'] == $id){
				$data[$i]['name'] = $name;
				$data[$i]['phone_number'] = $phoneNumer;
				break;
			}
		}
	}

	// echo '<table>';
	// foreach ($data as $key => $value) {
	// 	echo '<tr>';
	// 		echo '<td>';
	// 		echo $value['id'];
	// 		echo '</td>';
	// 		echo '<td>';
	// 		echo $value['name'];
	// 		echo '</td>';
	// 		echo '<td>';
	// 		echo $value['phone_number'];
	// 		echo '</td>';
	// 	echo '</tr>';

	// }
	// echo '</table>';

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
 				<th>ID</th>
 				<th>Name</th>
 				<th>Phone Number</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php
 			foreach ($data as $key => $value) {
 				?>
				<tr>
					<td><?= $value['id']; ?></td>
					<td><?= $value['name']; ?></td>
					<td><?= $value['phone_number']; ?></td>
				</tr>
			<?php
			}
 			?>
 		</tbody>
 	</table>
 	
 </body>
 </html>








