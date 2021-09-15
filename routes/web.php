<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home','TestController@index');
Route::get('/home2','TestController@index')->name('secondHome');

Route::group(['prefix'=>'account'], function(){
    Route::get('/register','TestController@register');
    Route::get('/login','TestController@login');
});

Route::get('/products','TestController@product');

Route::get('/products/create','TestController@createProduct');
Route::post('/products/store','TestController@storeProduct')->name('test.store');


Route::get('/products/{id}','TestController@productId');
