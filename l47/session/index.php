<?php 
session_start();
$name = 'quannv';
$_SESSION['name'] = $name;
echo $_SESSION['name'];


 ?>