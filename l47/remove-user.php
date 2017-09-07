<?php 
$id = isset($_GET['id']) == true ? $_GET['id'] : null;
if($id == null)
	header('location: index.php');

$query = "delete from users where id = $id";

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
$stmt->execute();

header('location: index.php');
 ?>