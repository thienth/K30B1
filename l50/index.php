<?php 
require_once './models/BaseModel.php';
require_once './models/UserModel.php';
require_once './models/ClassesModel.php';

$anhmt = UserModel::where('name', 'like', '%a%')->get();
var_dump($anhmt);
 ?>