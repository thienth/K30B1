<?php 
class Quat{
	var $hangSanXuat;
	var $namSanXuat;
	var $loaiQuat;

	var $soCanh;
	var $mauSac;
	var $congSuat;
	
	var $trangThai;

	function bat(){
		$this->trangThai = 'bat';
	}

	function tat(){
		$this->trangThai = 'tat';
	}

	function sonLai($color){
		$this->mauSac = $color;
	}
}
 ?>