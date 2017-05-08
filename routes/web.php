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

Route::get('/customer/checkin', 'CustomerController@index');
Route::get('/customer/table', 'CustomerController@show');

Route::get('/course/table', 'CourseController@index');
Route::get('/course/create', 'CourseController@create');

Route::get('/typeClass/create', 'typeClassController@create');
Route::get('/typeClass/show', 'typeClassController@index');

Route::get('/promotion/show', 'PromotionController@index');
Route::get('/promotion/create', 'PromotionController@create');

Route::get('/voucher/create', 'VoucherController@create');

Route::get('/booking/create', 'BookingController@create');

Route::get('/contactUs/index', function(){
  return view('/contactUs/index');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('register/create', 'RegisterController@showlstCustomer');
