<?php 
require_once 'Animal.php';
/**
* 
*/
class Dog extends Animal
{
	
	function feed($ip){
		echo 'toi la ' .$this->name. ', nam nay ' . $this->age . ' tuoi, toi vua an xong ' . $ip . ' kg thit voi';
	}
}


 ?>