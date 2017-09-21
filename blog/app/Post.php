<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'short_desc', 'content',
							'author', 'cate_id'];

    public function getCateName(){
    	$cate = Category::find($this->cate_id);
    	if($cate){
    		return $cate->name;
    	}

    	return null;
    }
}
