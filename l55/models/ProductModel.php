<?php 
require_once 'models/BaseModel.php';
require_once 'models/CategoryModel.php';
class ProductModel extends BaseModel
{
	public static $table = 'products';

	public static $attributes = [];

	// Lấy tên danh mục của sản phẩm đang được sử dụng
	public function getCategoryName(){
		$cate = CategoryModel::find($this->cate_id);
		if($cate){
			return $cate->name;
		}
		return null;
	}
}
 ?>