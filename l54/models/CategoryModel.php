<?php 
require_once 'models/BaseModel.php';
class CategoryModel extends BaseModel
{
	public static $table = 'categories';

	public static $attributes = ['name', 'in_nav'];

}
 ?>