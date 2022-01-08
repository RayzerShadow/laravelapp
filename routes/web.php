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
    return view('index');
}) -> name('strona-glowna');

Route::get('/welcome', function () {
    return view('welcome');
}) -> name('strona-glowna-laravel');





Route::get('/uslugi', function () {
    return view('services');
}) -> name('services');


Route::get('store_image', 'App\Http\Controllers\StoreImageController@index');
Route::post('store_image/insert_image', 'App\Http\Controllers\StoreImageController@insert_image');

Route::get('store_image/fetch_image/{id}', 'App\Http\Controllers\StoreImageController@fetch_image');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');

Route::get('/edit/{id}', 'App\Http\Controllers\AdminController@edit')->name('admin.edit');

//ROUTE NIE DZIAŁA :C
Route::get('/edit_user/{id}', 'App\Http\Controllers\AdminController@edit_user')->name('admin.edit_user');
Route::delete('usun_user/{id}', 'App\Http\Controllers\AdminController@delete_user')->name('admin.delete_user');
//ROUTE NIE DZIAŁA :C

Route::get('zmien/{id}', 'App\Http\Controllers\AdminController@update')->name('services.update');
Route::delete('usun/{id}', 'App\Http\Controllers\AdminController@delete')->name('admin.delete');

Route::get('detail/{id}', 'App\Http\Controllers\StoreImageController@servdetail')->name('detail');
Route::get('order/{id}', 'App\Http\Controllers\StoreImageController@order')->name('order');

Route::get('role', 'App\Http\Controllers\Auth\LoginController@authenticated')->name('role');
