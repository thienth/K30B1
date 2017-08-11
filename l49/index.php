<?php 
require_once 'Animal.php';
require_once 'Dog.php';
require_once 'Cat.php';
$rex = new Dog();
$rex->hairColor = 'red';
var_dump($rex->hairColor);
// $tom = new Cat('Tom', 100, 20, 'blue');
// $rex->feed(1);
// $tom->feed(1);
// echo Animal::$username;

// Animal::$username = 'Quan NV';
// echo Cat::find()->where('age', '>', 3)->get();
 ?>