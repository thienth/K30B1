<?php 
require_once './models/BaseModel.php';
require_once './models/UserModel.php';
require_once './models/ClassesModel.php';

$anhmt = UserModel::where('name', 'like', '%a%')
					->andWhere('address', 'like', '%nam%')->get();
var_dump($anhmt);
 ?>