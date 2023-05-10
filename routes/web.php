<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home.index');
// });

// Route::get('/product-list', function () {
//     return view('product.index');
// });

// Route::get('/create-product', function () {
//     return view('product.create');
// });
Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/product-list', [ProductController::class,'index'])->name('product.index');
Route::get('/create-product', [ProductController::class,'create'])->name('product.create');
Route::post('/store', [ProductController::class,'store'])->name('product.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
