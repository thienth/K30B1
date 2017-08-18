<?php 
require_once './models/BaseModel.php';
require_once './models/UserModel.php';
require_once './models/ClassesModel.php';

$quannv = new UserModel();

$quannv->email = 'quannv@gmail.com';
$quannv->password = md5('123456');
$quannv->name = 'nguyen van quan';
$quannv->address = "Thai Binh";
$quannv->save();


 ?>