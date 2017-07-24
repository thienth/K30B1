<?php 
	$numberA = $_POST['numbera'];
	$numberB = $_POST['numberb'];
	$numberC = $_POST['numberc'];

	if($numberA <= 0 || $numberB <= 0 || $numberC <= 0){
		echo "Khong hinh thanh tam giac, co 1 canh <= 0";
		die;
	}

	if($numberA + $numberB > $numberC 
		&& $numberA + $numberC > $numberB
		&& $numberB + $numberC > $numberA){
		echo "Co hinh thanh tam giac";

		$chuVi = $numberA + $numberB + $numberC;
		echo "Chu vi tam giac = " . $chuVi;

		$dienTich = 100;
		echo "Dien tich tam giac = " . $dienTich; 
	}else{
		echo "Khong hinh thanh tam giac";
	}

 ?>