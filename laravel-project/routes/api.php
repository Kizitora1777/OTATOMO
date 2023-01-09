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

Route::post('/login', 'Auth\LoginController@login');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/items', 'ItemsController@getAllItems');
Route::middleware('auth:api')->post('/items', 'ItemsController@createItem');

Route::resource('/items/{id}/images','ImageUploadController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
