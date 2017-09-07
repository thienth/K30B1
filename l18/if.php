<?php 

	$number = isset($_GET['number']) == true ? $_GET['number'] : 0;
	
	// == so sánh bằng (giá trị)
	// != so sánh khác
	// === so sánh tuyệt đối (giá trị và kiểu dữ liệu)
	// !== so sánh khác tuyệt đối (giá trị và kiểu dữ liệu)
	// > lớn hơn
	// >= lớn hơn hoặc bằng
	// < nhỏ hơn
	// <= nhỏ hơn hoặc bằng
	// ! phủ định
	// 
	// && phép và
	// || phép hoặc

	if(is_numeric($number) == true && $number < 0 ){
		echo "So ban truyen vao la so am";
	}else if($number == 0){
		echo "So ban truyen vao la so 0";
	}else{
		echo "So ban truyen vao la so duong";
	}

	// switch($number){
	// 		case 1:
	// 			câu lệnh....
	// 			break;
	// 		case 5:
	// 			câu lệnh ...
	// 			break;
	// 		default:
	// 			câu lệnh....
	// 			break;
	// }
	
	
	// Không biết trước số lần lặp
	$count = 0;
	while($count < 100){
		echo "$count <br>";
		$count++;
	}

	do{
		// câu lệnh

	}while(/* điều kiện */)

	// Vòng lặp biết trước số lần lặp
	for ($i=0; $i < 100; $i++) { 
		// câu lệnh
		// break;
		// continue;
	}

	for ($i=100; $i >=0 ; $i--) { 
		# code...
	}

	$arr = ['name' => 1, 'age' => 2];

	foreach ($arr as $key => $value) {
		# code...
	}


 ?>