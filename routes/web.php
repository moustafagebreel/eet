<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreeController;
use App\Http\Controllers\ProductController;
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

    Route::get('/page_contant/index2',[TreeController::class, 'index2'])->name('page_contant.index2');
    Route::get('/page_contant/index',[TreeController::class, 'index'])->name('page_contant.index');
    Route::get('/page_contant/create',[TreeController::class,'create'])->name('page_contant.create');
    Route::get('/page_contant/login',[TreeController::class,'login'])->name('page_contant.login');
    Route::post('/page_contant/store',[TreeController::class,'store'])->name('page_contant.store');
    Route::post('/page_contant/storelogin',[TreeController::class,'storelogin'])->name('page_contant.storelogin');
    Route::get('/page_contant/{id}/edit',[TreeController::class,'edit'])->name('page_contant.edit');
    Route::put('/page_contant/{id}',[TreeController::class,'update'])->name('page_contant.update');
    Route::delete('/page_contant/{id}',[TreeController::class,'destroy'])->name('page_contant.destroy');
//------------------------------------------------------------------------------------------------

Route::resource('product',ProductController::class);

Route::get('/', function () {
    return view('page_contant.index2');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
