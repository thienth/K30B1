<?php 
/**
* 
*/
require_once 'models/ProductModel.php';
require_once 'models/CategoryModel.php';
class HomeController
{
	// Hiển thị nội dung trang chủ, sản phẩm mới nhất, sản phẩm nổi bật
	function index(){
		
		$products = ProductModel::all();
		
		include_once 'views/layouts/client/header.php';
		include 'views/homepage.php';
		include_once 'views/layouts/client/footer.php';
	}

	function detailProduct(){
		$id = $_GET['id'];
		$product = ProductModel::find($id);
		if(!$product){
			header('location: index.php');
			die;
		}

		$product->view++;
		$product->save();
		
		include_once 'views/layouts/client/header.php';
		include 'views/detail-product.php';
		include_once 'views/layouts/client/footer.php';
	}

	function detailCategory(){
		$id = $_GET['id'];
		$products = ProductModel::where('cate_id', $id)->get();
		$cate = CategoryModel::find($id);
		
		include_once 'views/layouts/client/header.php';
		include 'views/detail-category.php';
		include_once 'views/layouts/client/footer.php';
	}
}

 ?>