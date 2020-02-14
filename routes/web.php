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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('', 'frontend');
// Route::get('/shop', 'frontend@shop');
Route::get('/shop','nyambungCotroller@shop');
Route::get('/produk-detail', 'frontend@produk_detail');
Route::get('/admin', 'frontend@admin');
Route::get('/contact', 'frontend@contact');
Route::get('/card', 'frontend@card');
Route::get('/', 'nyambungCotroller@index');


Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
    Route::resource('/produk','produkcontroller');
    Route::resource('/jenis_produk','jenis_produkController');
    Route::resource('/pengguna','penggunaController');
});

Route::resource('/api/produk','produkcontroller');