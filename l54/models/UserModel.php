<?php 
require_once 'models/BaseModel.php';
class UserModel extends BaseModel
{
	public static $table = 'users';

	public static $attributes = ['email', 'password', 'name', 'avatar', 'address'];

}
 ?>