<?php 

$name = 'quanhiv';

setcookie('studentname', $name, time()+60, '/');


var_dump($_COOKIE["studentname"]);


 ?>