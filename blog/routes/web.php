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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('triangle');
})->name('homepage');

Route::get('homepage', function(){
	$name = '<a href="#">quanhiv</a>';
	$age = 25;
	$pageTitle = 'Quan detail';
	$arr = [
		['name' => 'linhnt', 'age' => 15],
		['name' => 'tu anh', 'age' => 16],
		['name' => 'Đạt lé', 'age' => 18],
	];
	return view('homepage', compact('name', 'age', 'pageTitle', 'arr'));
});

