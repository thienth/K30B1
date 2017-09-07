<?php 
$str = $_POST['inputValue'];
$count = 0;
// cach 1
for ($i=0; $i < strlen($str); $i++) { 
	if($str[$i] == " "){
		$count++;
	}
}
// Cach 2
// $removeSpaceStr = str_replace(" ", "", $str);
// $count = strlen($str) - strlen($removeSpaceStr);

echo "Chuoi \"$str\" co $count ky tu khoang trang";
 ?>