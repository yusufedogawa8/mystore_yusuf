<?php

use Illuminate\Support\Facades\Route;
$url = "App\Http\Controllers";

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
    return view('home');
});

Route::get('product/edit/{id}', $url. '\productController@edit');
Route::post('product/update', $url. '\productController@update');

Route::get('product/{slug}', $url. '\productController@showProduct');
Route::get('product', $url. '\productController@index');