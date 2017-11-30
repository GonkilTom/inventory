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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('url', 'function name in home controller')->name('home');
Route::get('/dashboard', 'HomeController@display')->name('dashboard');
Route::resource('users','UsersController');
Route::get('/userslayout','UsersController@users_layout' )->name('userslayout');
Route::get('/display','UsersController@display_users')->name('display_users');
// Route::post('/userslayout','UsersController@userslayout' )->name('userslayoutp');
// Route::resource('tests', 'TestController');
