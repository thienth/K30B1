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



Route::get('/', function(){
	return 'homepage';
})->name('homepage');

Auth::routes();

Route::get('generate-pwd/{pwd}', function($pwd){
	return Hash::make($pwd);
});

