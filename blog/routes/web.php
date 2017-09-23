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

Route::get('logout', function(){
	Auth::logout();
	return redirect()->route('login');
})->name('logout');

Auth::routes();

Route::get('generate-pwd/{pwd}', function($pwd){
	return Hash::make($pwd);
});

Route::get('reset-password/{token}', function($token){
	$remember = DB::table('password_resets')->where('token', $token)->first();

	$yesterday = Carbon\Carbon::parse($remember->created_at);
	
	$now = Carbon\Carbon::now();
   	$between = $now->diffInDays($yesterday);
   	// neu thoi gian tu luc gui email cho den hien tai  >= 1
   	// tra ve cho ho 1 message da qua thoi gian lay lai mat kha, ban vui long lam lai
   	if($between == 0){
   		return view('reset-password', ['forget_token' => $token]);
   	}
	
})->name('reset-password');

Route::get('test-send-mail', function(){
	// 1 Kiem tra user co trong he thong hay khong
	$user = App\User::where('email', 'thienth32@gmail.com')->first();
	$token = str_random(32);
	DB::table('password_resets')->insert([
		'email' => $user->email,
		'token' => $token,
		'created_at' => Carbon\Carbon::now()
	]);

	Mail::send('mail_template.test', ['username' => $user->name, 'token' => $token], function ($message) {
	    $message->from('nguyenlinh980224@gmail.com', 'Nguyen Linh');
	    // $message->sender('thienth3@fe.edu.vn', 'thien tran');

	    $message->to('thienth32@gmail.com', 'Tran Huu Thien');

	    $message->replyTo('nguyenlinh980224@gmail.com', 'Nguyen Linh');

	    $message->subject('Test send email');

	    $message->priority(3);

	    // $message->attach('pathToFile');
	});
});

Route::get('pwd-generate/{pwd}', function($pwd){
	return Hash::make($pwd);
});

