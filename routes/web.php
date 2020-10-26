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
    return view('welcome');
});

Route::get('product/edit/{product:product_slug}', $url. '\productController@edit');
Route::patch('product/update', $url. '\productController@update');
// Upload
Route::get('product/upload', $url. '\productController@upload');

Route::get('product/{slug}', $url. '\productController@showProduct');
Route::get('product', $url. '\productController@index');

Route::get('tambah', $url. '\productController@tambah');
Route::post('product/simpan', $url. '\productController@simpan');

Route::delete('product/delete/{product:product_slug}', $url. '\productController@delete');
// Excel
Route::get('product/export/xlsx', $url. '\productController@exportXL');
// EXCEL CSV
Route::get('product/export/csv', $url. '\productController@exportCSV');
// PDF
Route::get('product/export/pdf', $url. '\productController@exportPDF');
// Upload

Route::post('product/upload/data', $url. '\productController@uploadData');

Route::get('kirimEmail', function() {
    $massage = [
        'title' => 'HACKING YOUR EMAIL',
        'body' => 'Jangan Harap bisa main email Anda lagi'
    ];

    \Mail::to('faizhasan164227@gmail.com')->send(new \App\Mail\EmailKu($massage));

    dd('Email is sent');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
