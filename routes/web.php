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
    return view('landingpage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/profile-{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('profile.update');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/admin/product', [App\Http\Controllers\AdminController::class, 'product'])->name('admin.product')->middleware('admin');
Route::get('/admin/product/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.product.create')->middleware('admin');
Route::post('/admin/product/store', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.product.store')->middleware('admin');
Route::get('/admin/product/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.product.edit')->middleware('admin');
Route::post('/admin/product/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.product.update')->middleware('admin');
Route::get('/admin/product/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.product.delete')->middleware('admin');


//rest api
//get all product
Route::get('/api/product', [App\Http\Controllers\ApiController::class, 'index']);
//get product by id
Route::get('/api/product/{id}', [App\Http\Controllers\ApiController::class, 'show']);

