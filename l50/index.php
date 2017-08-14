<?php 
require_once './models/BaseModel.php';
require_once './models/UserModel.php';
require_once './models/ClassesModel.php';

$anhmt = UserModel::where('name', 'like', '%nguyen%')
					->orWhere('address', 'like', '%nam%')->first();
var_dump($anhmt);
 ?>