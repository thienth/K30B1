<?php 
$class_name = isset($_POST['class_name']) == true ? $_POST['class_name'] : "";
$semester_id = isset($_POST['semester_id']) == true ? $_POST['semester_id'] : "";

if($class_name == ""){
	echo "Class name invalid!";
	die;
}

$query = "insert into classes (class_name, semester_id) 
			values
			(:class_name, :semester_id)";

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

$stmt = $connect->prepare($query);
$stmt->bindValue(":class_name", $class_name);
$stmt->bindValue(":semester_id", $semester_id);
$stmt->execute();
header('location: classes.php');

 ?>
