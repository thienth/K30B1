<?php 

Route::get('/', function(){
	return view('admin.dashboard');
})->name('dashboard');

Route::get('category', 'Admin\CategoryController@index')->name('cate.index');

 ?>