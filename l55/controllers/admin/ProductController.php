<?php 
/**
* 
*/
require_once 'models/CategoryModel.php';
require_once 'models/ProductModel.php';
class ProductController
{
	
	function index(){
		// 1. Lay toan bo san pham trong csdl
		$products = ProductModel::all();

		// 2. Hien thi danh sach san pham
		include_once 'views/layouts/client/header.php';
		include 'views/admin/product/index.php';
		include_once 'views/layouts/client/footer.php';
	}
}

 ?>