<?php 
/**
* 
*/
require_once 'models/ProductModel.php';
class HomeController
{
	// Hiển thị nội dung trang chủ, sản phẩm mới nhất, sản phẩm nổi bật
	function index(){
		
		$products = ProductModel::all();
		
		include_once 'views/layouts/client/header.php';
		include 'views/homepage.php';
		include_once 'views/layouts/client/footer.php';
	}
}

 ?>