<?php 
namespace Controller;

use MongoModel\ProductModel;
/**
* 
*/
class HomeController
{
	
	function index()
	{
		$model = new ProductModel();
		$model->getAll();
	}
}


 ?>