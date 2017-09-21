<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function getCateName(){
    	$cate = Category::find($this->cate_id);
    	if($cate){
    		return $cate->name;
    	}

    	return null;
    }
}
