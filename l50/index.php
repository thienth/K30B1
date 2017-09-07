<?php 
require_once './models/BaseModel.php';
require_once './models/UserModel.php';
require_once './models/ClassesModel.php';

$quanhiv = UserModel::find(7);
if($quanhiv != null){
	var_dump($quanhiv->delete());
}

 ?>