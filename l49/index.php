<?php 
require_once './models/BaseModel.php';
require_once './models/UserModel.php';

$anhmt = UserModel::find(1);
var_dump($anhmt);

 ?>