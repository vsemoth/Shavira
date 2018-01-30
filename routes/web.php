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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/front/product/{$id}', ['uses' => 'ProductsController@show', 'as' => 'product.shirt']);

Route::get('/admin/show/{$id}', ['uses' => 'ProductsController@show', 'as' => 'product.shirt']);

Auth::routes();

Route::get('/logout', 'auth\LoginController@logout')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('cart', 'CartController');

Route::get('/', 'FrontController@index')->name('landing');

Route::get('/shirts', 'FrontController@shirts')->name('shirts');

Route::get('/shirt', 'FrontController@getShirt')->name('shirt');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function ()
{
	Route::get('/', function ()
	{
		# code...
		# return view
		return view('admin.index');
	})->name('admin.index');

	Route::resource('product', 'ProductsController');


	Route::resource('category', 'CategoriesController');

});
