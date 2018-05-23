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

Route::get('/user/list', function () {
    return view('backend.user.list');
})->name('user.list');

Route::get('/user/create', function () {
    return view('backend.user.create');
})->name('user.create');

Route::get('/selecting', function () {
    return view('selecting');
})->name('selecting');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
