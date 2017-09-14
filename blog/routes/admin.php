<?php 

Route::get('/', function(){
	return view('admin.dashboard');
})->name('dashboard');

// 1. Tạo ra controller Category trong thư mục Admin của Controllers
// 2. Tạo ra hàm index trong Category Controller
// 3. Tạo ra model Category trong App 
// 4. Trong hàm index sử dụng model Category để lấy ra toàn bộ dữ liệu trong bảng categories
// 5. hàm index return view category.index và truyền dữ liệu của bảng categories ra view
// 6. Hiển thị dạng bảng toàn bộ các danh mục
Route::get('category', 'Admin\CategoryController@index')->name('cate.index');

 ?>