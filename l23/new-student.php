<?php
if($_SEVER('REQUESTS_METHOD') == "POST"){
	// 1. lấy data ở các file Student_name và Student_age từ form gửi lên
	$name = $_POST['name'];
	$age = $_POST['age'];
	// nếu name và age ko có gì thì không có dữ liệu
	if ($name == "" || $age == "") {
		echo "Không có dữ liệu";
	}else{
	// 2. Thực hiện lấy dữ liệu từ file data.txt chuyển thành dạng array
		$myfile = fopen('data.txt', "w") or die("Unable to open file!");
		$arr = [];
	while (!feof($myfile)) {
	$arrNew = explode('|', fgets($myfile));
	if($arrNew[0] == ""){
		continue;
	}
	$arrChild['id'] = $arrNew[0];
	$arrChild['name'] = $arrNew[1];
	$arrChild['age'] = $arrNew[2];
	array_push($arr, $arrChild);
	}
	var_dump($arr);
	// 3. thực hiện lấy số id lớn nhất trong mảng ở trên 
	$max = $arr[0]['id'];
			foreach ($arr as $key => $value) {
				if($max < $value['id']){
					$max = $value['id'];
				}
			}
	// 4. Tạo 1 id mới = id lớn nhất +1
			$id = $max + 1;
	// 5. Add thêm phần tử với id vừa tạo, name = student name,age =Student age lấy từ form
			$student['id'] = $id;
			$student['name'] = $name;
			$student['age'] = $age;
			array_push($arr, $student);
	// 6. Ghi dữ liệu từ mảng vào trong file data.txt
			$data = fopen("data.txt", "w") or die('Unable to open file!');
			foreach ($arr as $key => $value) {
				$aStudent = $value['id'] . "|" . $value['name'] . "|" . $value['age'] . "\n";
				fwrite($data, $aStudent);
			}
			fclose($data);
	// 7. điều hướng website về trang index.php
			header('location: index.php');
	}
?>
}
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Add new student</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<form action="" method="POST">
	<div>
		<input type="text" name="name" value="" placeholder= "Name Student ">
	</div>
	<div>
		<input type="number" name="age" value="" placeholder="Age Student ">
	</div>
	<div>
			<button type="submit">Save</button>
		</div>

</form>
</body>
</html>
