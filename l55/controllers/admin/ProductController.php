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

	function add(){
		$model = new ProductModel();
		$cates = CategoryModel::all();

		include_once 'views/layouts/client/header.php';
		include 'views/admin/product/form.php';
		include_once 'views/layouts/client/footer.php';
	}

	function edit(){
		$id = $_GET['id'];
		$model = ProductModel::find($id);
		$cates = CategoryModel::all();

		include_once 'views/layouts/client/header.php';
		include 'views/admin/product/form.php';
		include_once 'views/layouts/client/footer.php';
	}

	function save(){
		$id = $_POST['id'];

		$model = $id == '' ? new ProductModel() 
							: ProductModel::find($id);
		$model->product_name = $_POST['product_name'];
		$model->list_price = $_POST['list_price'];
		$model->sell_price = $_POST['sell_price'];
		$model->cate_id = $_POST['cate_id'];
		$model->product_detail = $_POST['product_detail'];
		$model->views = 0;
		if($_FILES['image']['size'] > 0){
			$file = $_FILES['image'];
			$fileName = "uploads/" . uniqid() . '-' . $file['name'];
			if(move_uploaded_file($file['tmp_name'], $fileName)){
				$model->image = $fileName;
			}
		}
		// dd($model);
		$model->save();

		header('location: '.url('admin/product'));
	}
}

 ?>