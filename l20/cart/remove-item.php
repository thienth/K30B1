<?php 
session_start();
$id = $_GET['id'];

if(isset($_SESSION['CART']) || count($_SESSION['CART']) > 0){
	$index = -1;
	$sessionValue = $_SESSION['CART'];
	for ($i=0; $i < count($sessionValue); $i++) { 
		if($sessionValue[$i]['id'] == $id){
			$index = $i;
			break;
		}
	}

	if($index != -1){
		array_splice($sessionValue, $index, 1);
	}

	$_SESSION['CART'] = $sessionValue;
}
header('location: session.php');





 ?>