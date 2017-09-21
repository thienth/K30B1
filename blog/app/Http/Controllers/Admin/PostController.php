<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
class PostController extends Controller
{
    public function index(Request $request){
    	$keyword = $request->keyword;
    	if($request->keyword != ""){
    		$posts = Post::where('title', 'like', "%$request->keyword%")->orderBy('id', 'desc')->paginate(15);
    		$posts->withPath("?keyword=$request->keyword");
    	}else{
    		$posts = Post::orderBy('id', 'desc')->paginate(15);
    	}
    	
    	return view('admin.post.index', compact('posts', 'keyword'));
    }

    public function add(){
        $model = new Post();
        $cates = Category::all();
        return view ('admin.post.form', compact('model', 'cates'));
    }

    public function save(Request $request){
    	$model = $request->id > 0  
                    ? Post::find($request->id) 
                    : new Post();
        $model->fill($request->all());
        if($request->hasFile('feature_image')){
        	$fileName = uniqid() . "." . $request->feature_image->extension();
        	$request->feature_image->storeAs('uploads', $fileName);
        	$model->feature_image = 'uploads/' . $fileName;
        }
        $model->save();
        return redirect(route('post.index'));
    }
}
