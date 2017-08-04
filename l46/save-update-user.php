<?php 

$id = isset($_POST['id']) == true ? $_POST['id'] : null;
$role_id = isset($_POST['role_id']) == true ? $_POST['role_id'] : null;
$name = isset($_POST['name']) == true ? $_POST['name'] : null;
$address = isset($_POST['address']) == true ? $_POST['address'] : null;

// 2 dựa vào id để lấy thông tin từ db ra ngoài
// 2.1 Tạo kết nối đến csdl
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

$query = "	update users 
			set 
				role_id = :role_id,
				name = :name,
				address = :address
			where id = :id";
$stmt = $connect->prepare($query);
$stmt->bindValue(':id', $id);
$stmt->bindValue(':role_id', $role_id);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':address', $address);
$stmt->execute();	

header('location: index.php');		

 ?>