<?php 
class Ceil{
	function run(){
		echo 'im running';
	}
}


class Animal extends Ceil{
	// var $name;
	// var $age;
	// var $weight;
	// var $hairColor;
	const LEG_NUMBER = 1;
	static $username = 'Linh NT';

	static function test($name){
		$model = new static();
		$model->name = $name;
		return $model;
	}

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