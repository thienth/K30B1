<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
    	$cates = Category::all();
    	
    	return view('admin.category.index', compact('cates'));
    }

    public function add(){
    	$model = new Category();
    	$cates = Category::where('is_major', 1)->get();
    	return view ('admin.category.form', compact('model', 'cates'));
    }
}
