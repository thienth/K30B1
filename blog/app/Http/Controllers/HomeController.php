<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
class HomeController extends Controller
{
    public function index(){
    	$name = '<a href="#">quanhiv</a>';
		$age = 25;
		$pageTitle = 'Quan detail';
		$arr = [
			['name' => 'linhnt', 'age' => 15],
			['name' => 'tu anh', 'age' => 16],
			['name' => 'Đạt lé', 'age' => 18],
		];

		$products = Product::all();
		dd($products);
		return view('homepage', compact('name', 'age', 'pageTitle', 'arr'));
		// 
		// return response()->json($arr);
		// return redirect(route('test'));
    }

    public function addProduct($name, $listPrice, $sellPrice)
    {
    	$model = new Product();
    	$model->name = $name;
    	$model->list_price = $listPrice;
    	$model->sell_price = $sellPrice;
    	$model->save();
    	return redirect(route('homepage'));
    }
}
