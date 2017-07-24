<?php

// 1. Đọc dữ liệu từ file data.txt sau đó hiển thị 
// ra dạng bảng bao gồm các cột id, name, age
$myFile = fopen("data.txt", "r") or die("Unable to open file!");
$arr = [];
while(!feof($myFile)) {
    $arrNew = explode('|',fgets($myFile));
    if($arrNew[0] == ""){
        continue;
    }
    $arrChild['id'] = $arrNew[0];
    $arrChild['name'] = $arrNew[1];
    $arrChild['age'] = $arrNew[2];
    array_push($arr,$arrChild);
}
fclose($myFile);
?>
<div class="container" style="padding-top: 2em;">
	<table class="table table-bordered table-hover" >
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Age</th>
				<th><a href="new-student.php">Add new</a></th>
			</tr>
		</thead>
		<tbody>
		<?php 
	        foreach ($arr as $key => $value) {
		?>
		    <tr>
				<td><?= $value['id'] ?></td>
				<td><?= $value['name'] ?></td>
				<td><?= $value['age'] ?></td>
				<td>
					<a href="edit-student.php?id=<?= $value['id'] ?>">Update</a>
					<a href="remove-student.php?id=<?= $value['id'] ?>">Remove</a>
				</td>
			</tr>
		<?php
	        }
		?>
		</tbody>
	</table>
</div>