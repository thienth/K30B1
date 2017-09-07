<?php 
function dd($var){
	var_dump($var);
	die;
}

function product_price($priceFloat) {
	$symbol = 'đ';
	$symbol_thousand = '.';
	$decimal_place = 0;
	$price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
	return $price.$symbol;
}

function url($url){
	return "http://localhost/k30b1_repo/l55/$url";
}
 ?>
