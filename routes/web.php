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
// Route::resource('users','UsersController');
Route::get('items/show','ItemController@show')->name('items.show');
Route::resource('items','ItemController',['except' => 'show']);
            // old url             new url
// Route::get('photo/build', ['as' => 'photo.create', 'uses' => 'PhotoController@create']);
Route::resources([
    'users' => 'UsersController',
    'categories' => 'CategoryController'

]);
// Route::get('/userslayout','UsersController@users_layout' )->name('userslayout');
Route::get('/display_users','UsersController@display_users')->name('users.display');
// Route::get('/users/edit/{username}','UsersController@edit_users')->name('edit_user');
// Route::post('/userslayout','UsersController@userslayout' )->name('userslayoutp');
// Route::resource('tests', 'TestController');
Route::get('/display_categories','CategoryController@display')->name('categories.display');

Route::get('/stockmgt','MultipleController@index')->name('stockmgt');
Route::get('/stockmgt/{item}/edit','MultipleController@stockmgt_edit')->name('stockmgt.edit');
Route::put('/stockmgt/{item}','MultipleController@stockmgt_update')->name('stockmgt.update');
Route::patch('/stockmgt/{item}','MultipleController@stockmgt_update')->name('stockmgt.update');
Route::get('/fulllist', 'MultipleController@full_stock_display')->name('fulllist.display');

Route::get('/sale','SalesController@index')->name('sales.index');
