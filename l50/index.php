<?php 
require_once './models/BaseModel.php';
require_once './models/UserModel.php';
require_once './models/ClassesModel.php';

$anhmt = UserModel::all();
var_dump($anhmt);
 ?>