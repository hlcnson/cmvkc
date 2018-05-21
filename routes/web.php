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
    return view('home');
})->name('home');

Route::get('/users', function () {
    return view('backend.users');
})->name('users');

Route::get('/selecting', function () {
    return view('selecting');
})->name('selecting');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
