<?php 
$str = $_POST['inputValue'];
$result = "";
for ($i=0; $i < strlen($str); $i++) { 
	if($i%2==0){
		$result .= strtoupper($str[$i]);
	}else{
		$result .= strtolower($str[$i]);
	}
}
echo "\"$str\" => \"$result\"";


 ?>