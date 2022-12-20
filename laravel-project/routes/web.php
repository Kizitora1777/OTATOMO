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

Route::get('/debug/databases', 'DebugDtabasesController@index')->name('DebugDtabases.index');

// 画像登録
Route::resource('/upload','ImageUploadController');

Auth::routes();

// 物品一覧
Route::get('/items', 'itemsController@getAllItems');
Route::post('/items', 'itemsController@createItem');

// 物品詳細
Route::get('/items/{id}', 'itemsController@showItem');

// debug for POST /items
// 物品登録のためのフォーム
Route::get('/debug/item_create', 'itemsController@create');

// ログイン
Route::get('/home', 'HomeController@index')->name('home');


// 貸し借り機能
Route::post('/rentals', 'rentalsController@createRental');
Route::get('/rentals/{id}', 'rentalsController@showRental');
