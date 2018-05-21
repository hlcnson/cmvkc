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

Route::get('/', function () {
    if (\Auth::check()) {
        return view('home');
    } else {
        return view('auth.login');
    }
    
})->name('home');

Auth::routes();

// Tạo một route group với prefix là manage.
// Bảo vệ các route trong group bằng middleware. Chỉ những user với các role được
// chỉ định mới có thể truy cập vào route trong group này. Middleware được sử dụng
// là auth của Laravel
Route::prefix('manage')->middleware('auth')->group(function(){
    // Hiển thị dashboard nếu user đã đăng nhập, nếu không chuyển về trang login
    Route::get('/', 'HomeController@index');
    // Sử dụng tính năng Resource routing của Laravel, tự động gán các CRUD route cho các action của controller.
    // Route này là một tập hợp các route ứng với chức năng CRUD của controller.
    Route::resource('/user', 'UserController');
    Route::resource('/permission', 'PermissionController');
    Route::resource('/role', 'RoleController');
    
    
    // Tạo các route CRUD, ngoại trừ manage/permissions.destroy
    // Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    // Tạo các route CRUD, ngoại trừ manage/roles.destroy
    // Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
    // Tạo các route CRUD
    // Route::resource('/posts', 'PostController');
});

