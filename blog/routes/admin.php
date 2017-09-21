<?php 

Route::get('/', function(){
	return view('admin.dashboard');
})->name('dashboard');

Route::get('category', 'Admin\CategoryController@index')->name('cate.index');
Route::get('category/add', 
	'Admin\CategoryController@add')->name('cate.add');
Route::get('category/edit/{id}', 
	'Admin\CategoryController@edit')->name('cate.edit');
Route::post('category/save', 
	'Admin\CategoryController@save')->name('cate.save');
Route::get('category/remove/{id}', 
	'Admin\CategoryController@remove')->name('cate.remove');


Route::get('post', 'Admin\PostController@index')->name('post.index');
Route::get('post/add', 
	'Admin\PostController@add')->name('post.add');
Route::post('post/save', 
	'Admin\PostController@save')->name('post.save');

 ?>