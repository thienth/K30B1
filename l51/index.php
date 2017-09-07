<?php 
require_once './models/BaseModel.php';
require_once './models/UserModel.php';
require_once './models/ClassesModel.php';

$duytd = UserModel::find(9);
$duytd->email = 'duytd@gmail.com';
$duytd->password = md5('123456');
$duytd->name = 'Tran Dinh Duy';
$duytd->address = "Tien Lang, Hai Phong";
// var_dump($duytd);die;
echo $duytd->save();


 ?>