<?php 
require_once 'models/BaseModel.php';
require_once 'models/CategoryModel.php';
class ProductModel extends BaseModel
{
	var $id;
	var $product_name;
	var $sell_price;
	var $list_price;
	var $product_detail;
	var $image;
	var $view;

	public static $table = 'products';

	public static $attributes = ['product_name', 'sell_price', 'list_price', 'product_detail', 'image', 'view'];

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