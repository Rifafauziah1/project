<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Tester Admin Template
Route::get('test-admin', function(){
    return view('layouts.admin');
});

//Admin Rouute
Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
    Route::get('/',function(){
        return view('admin.index');
    });
    
    Route::resource('kategori', KategoriController::class);
    Route::resource('books', BooksController::class);
    Route::resource('pembeli', PembeliController::class);
    Route::resource('transaksi', TransaksiController::class);
});

