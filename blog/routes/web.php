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

Route::get('test-send-mail', function(){
		$user = App\User::find(3);
		Mail::send('mail_template.test', ['username' => $user->name], function ($message) {
	    $message->from('nguyenlinh980224@gmail.com', 'Nguyen Linh');
	    // $message->sender('thienth3@fe.edu.vn', 'thien tran');

	    $message->to('thienth32@gmail.com', 'Tran Huu Thien');

	    $message->replyTo('nguyenlinh980224@gmail.com', 'Nguyen Linh');

	    $message->subject('Test send email');

	    $message->priority(3);

	    // $message->attach('pathToFile');
	});
});

