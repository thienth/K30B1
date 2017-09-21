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
    		$posts = Post::where('title', 'like', "%$request->keyword%")->paginate(15);
    		$posts->withPath("?keyword=$request->keyword");
    	}else{
    		$posts = Post::paginate(15);
    	}
    	
    	return view('admin.post.index', compact('posts', 'keyword'));
    }

    public function add(){
        $model = new Post();
        $cates = Category::all();
        return view ('admin.post.form', compact('model', 'cates'));
    }
}
