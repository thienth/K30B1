<?php 
session_start();
// Lay id tu url
$id = $_GET['id'];
$products = [
	['id' => 1, 'name' => 'Vu Dinh Trang', 'price' => 2000],
	['id' => 2, 'name' => 'Vu Dinh Dong', 'price' => 3000],
	['id' => 3, 'name' => 'Vu Dinh Tuoi', 'price' => 4000],
	['id' => 4, 'name' => 'Vu Dinh Heo', 'price' => 5000],
];

// Tim ra san pham dua tren id nhan dc tu url
foreach ($products as $key => $value) {
	if($value['id'] == $id){
		$product = $value;
	}
}

// var_dump($_SESSION['CART']);die;

// Neu ton tai session CART
if(isset($_SESSION['CART']) ){

	$sessionValue = $_SESSION['CART']; 
	// kiem tra xem san pham trong gio hang co cai nao trung voi id truyen vao hay khong
	$check = false;
	for ($i=0; $i < count($sessionValue); $i++) { 
		if($sessionValue[$i]['id'] == $id){
			// neu trung id thi quantity se dc them 1 gia tri
			$sessionValue[$i]['quantity']++;
			$check = true;
			break;
		}
	}

	// Neu gia tri cua bien check == false (id cua san pham k ton tai trong gio hang)
	if(!$check){
		$product['quantity'] = 1;
		array_push($sessionValue, $product);
	}

	$_SESSION['CART'] = $sessionValue;

}else{
	// var_dump(1);die;
	// Neu khog ton tai session CART
	// them so luon vao product - set = 1
	$product['quantity'] = 1;
	// Tao session CART va push product vao trong gio hang
	$sessionValue = [];

	array_push($sessionValue, $product);
	$_SESSION['CART'] = $sessionValue;
}

header('location: session.php');

 ?>