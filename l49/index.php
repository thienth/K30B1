<?php 
require_once './models/BaseModel.php';
require_once './models/UserModel.php';
require_once './models/ClassesModel.php';

$anhmt = ClassesModel::find(1);
var_dump($anhmt);

 ?>