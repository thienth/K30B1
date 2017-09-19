<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Requests\SaveCategoryRequest;

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

    public function edit($id){
        $model = Category::find($id);
        if(!$model){
            return abort(404, 'id không tồn tại');
        }
        $cates = Category::where('is_major', 1)->get();
        return view ('admin.category.form', compact('model', 'cates'));
    }

    public function remove($id){
        $model = Category::find($id);
        if(!$model){
            return abort(404, 'id không tồn tại');
        }
        $model->delete();
        return redirect(route('cate.index'));
    }

    public function save(SaveCategoryRequest $request){
    	$model = $request->id > 0  
                    ? Category::find($request->id) 
                    : new Category();
        $model->fill($request->all());
        $model->save();
        return redirect(route('cate.index'));
    }
}
