<?php 
# 1. cho 1 mảng gồm các số [1, 19, 22, 35, 10, 8]
# Lọc ra các phần tử là số lẻ và hiển thị
 
# Write a PHP program to find a missing number(s) from an array.Go to the editor 
# Input : 1,2,3,6,7,8
# Output : Array 
# ( 
# [3] => 4
# [4] => 5
# ) 
$root = [1,2,3,6,7,8, 10, 20];
$result  =[];
// for ($i=$root[0]; $i <= $root[count($root)-1]; $i++) { 
// 	if(!in_array($i, $root)){
// 		$result[] = $i;
// 	}
// }

// var_dump($result);
for ($i=0; $i < count($root); $i++) { 
	if(isset($root[$i+1])){
		$gap = $root[$i+1] - $root[$i];
		if($gap > 1){
			$result = getLackElement($root[$i], $gap, $result);
		}
	}
}

// var_dump($result);

function getLackElement($from, $gap, $result){
	for ($i=1; $i < $gap; $i++) { 
		$result[] = $from+1;
		$from++;
	}

	return $result;
}
/* Write a PHP program to find a single number in an array that doesn't occur twice. Go to the editor
Input : array(5, 3, 4, 3, 4)
Output : Array 
( 
[0] => 5 
[1] => 3 
[2] => 4 
[3] => 3 
[4] => 4 
) 
Single Number: 5 */
$arr = [5, 3, 4, 3, 4, 6, 5];
$result = [];
for ($i=0; $i < count($arr); $i++) { 
	$tmp = $arr;
	array_splice($tmp, $i, 1);
	if(!in_array($arr[$i], $tmp)){
		$result[] = $arr[$i];
	}
}
var_dump($result);



 ?>