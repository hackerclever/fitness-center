<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('customers', 'Api\CustomersController');
Route::resource('typeclass', 'Api\TypeClassController');
Route::resource('courses', 'Api\CourseController');
Route::resource('vouchers', 'Api\VoucherController');
// Route::get('singers/{id}/albums', 'Api\SingersController@albums');
// Route::resource('singers', 'Api\SingersController');
// Route::get('albums/{id}/songs', 'Api\AlbumsController@songs');
// Route::resource('albums', 'Api\AlbumsController');
