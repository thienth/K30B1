<?php 
$str = $_POST['inputValue'];
$char = $_POST['inputChar'];
// $index = strpos($str, $char);

// echo "\"$str\" => \"$char\" o vi tri: $index";
$arr = explode(" ", $str);
// $result = array_reverse($arr);
// $str = implode(" ", $result);
// echo $str;

$flag = -1;
for ($i=0; $i < count($arr); $i++) { 
	if(strripos($arr[$i], $char) !== false){
		$flag = $i+1;
		break;
	}
}
if($flag != -1){
	echo "\"$str\" => \"$char\" o tu so: $flag";
}else{
	echo "Ky tu \"$char\" khong ton tai trong mang \"$str\"";
}


 ?>