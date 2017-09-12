<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'HomeController@index')->name('homepage');

Route::get('test', function(){
	return "redirect target";
})->name('test');

Route::get('add-product/{name}/{listPrice}/{sellPrice}', 'HomeController@addProduct')->name('add-product');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', function(){
	return 'dashboard page';
})->name('dashboard');
