<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
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

Route::get('',[HomeController::class,'index']);
Route::get('about',[AboutController::class,'index']);
Route::get('contact',[ContactController::class,'index']);
Route::get('c/{slug}',[CategoryController::class,'index'])->name('get.category');
Route::get('p/{slug}',[ProductController::class,'index'])->name('get.product');
