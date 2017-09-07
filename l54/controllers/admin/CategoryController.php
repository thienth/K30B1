<?php 
/**
* 
*/
require_once 'models/CategoryModel.php';
class CategoryController
{
	
	function addCateForm(){
		$model = new CategoryModel();

		include_once 'views/layouts/client/header.php';
		include 'views/admin/category/form.php';
		include_once 'views/layouts/client/footer.php';
	}
}

 ?>