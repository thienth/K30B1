<?php 
class Animal{
	// var $name;
	// var $age;
	// var $weight;
	// var $hairColor;

	function __construct($name = null, $age = 0, $weight = 0, $hairColor = 'black'){
		$this->name = $name;
		$this->age = $age;
		$this->weight = $weight;
		$this->hairColor = $hairColor;
	}

	function feed($input){
		$this->weight += $input;
		echo "Toi la $this->name da an $input kg";
	}

}
?>