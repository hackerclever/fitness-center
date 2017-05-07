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

Route::get('/home', 'HomeController@index');

Route::get('/customer/book', 'CustomerController@create');
Route::get('/customer', 'CustomerController@index');
Route::get('/customer/table', 'CustomerController@show');

Route::get('/course/table', 'CourseController@index');
Route::get('/course/create', 'CourseController@create');

Route::get('/promotion/show', 'PromotionController@index');
Route::get('/promotion/create', 'PromotionController@create');

Route::get('/voucher/create', 'VoucherController@create');
