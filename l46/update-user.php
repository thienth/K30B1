<?php 
// 1. Lấy id từ url
$id = isset($_GET['id']) == true ? $_GET['id'] : null;
if($id == null){
	echo "ID không hợp lệ";
	die;
}

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

// 2.2 tạo câu query để lấy dữ liệu từ db
$query = "select * from users where id = :id";
$stmt = $connect->prepare($query);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$rs = $stmt->fetch();
if($rs === false){
	echo "Id không tồn tại!";
	die;
}
// 3. tạo form html
// 4. đưa thông tin đã lấy từ db ra vào form
// 5. sửa thông tin trên form và gửi sang 1 trang khác để lưu lại

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
 	<fieldset>
 		<legend>Update user</legend>
 		<form action="save-user.php" method="post">
	 		<div>
	 			<label>Role:</label>
	 			<?php 
	 			$checked = $rs['role_id'] == 100 ? "checked" : "";
	 			 ?>
	 			<input type="radio" <?= $checked?> name="role_id" value="100"> <label>Student</label>

	 			<?php 
	 			$checked = $rs['role_id'] == 500 ? "checked" : "";
	 			 ?>
	 			<input type="radio" <?= $checked?> name="role_id" value="500"> <label>Supervisor</label>

	 			<?php 
	 			$checked = $rs['role_id'] == 900 ? "checked" : "";
	 			 ?>
	 			<input type="radio" <?= $checked?> name="role_id" value="900"> <label>Super admin</label>
	 		</div>
	 		<div>
	 			<label>Full name:</label>
	 			<input type="text" name="name" value="<?= $rs['name']?>" placeholder="Full name">
	 		</div>
	 		<div>
	 			<label>Address:</label>
	 			<input type="text" value="<?= $rs['address']?>" name="address" placeholder="Address">
	 		</div>
	 		<div>
	 			<button type="submit">Save</button>
	 		</div>

 		</form>
 	</fieldset>
 </body>
 </html>