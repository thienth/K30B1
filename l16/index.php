<meta charset="utf-8">
<?php 
	// khai bao bien
	$tenbien = 123;

	// khai bao hang so
	define('LINH', 'Quân hâm!');

	// echo LINH;
	// echo $tenbien;
	 
	 
	tinhTong('a', 4);
	function tinhTong($soa, $sob){
		echo $soa + $sob;
	}
 ?>