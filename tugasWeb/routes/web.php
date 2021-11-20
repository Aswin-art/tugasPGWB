<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
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
    return view('adminapp.master');
});

Route::get('/dashboard', function () {
    return view('admindashboard');
});

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');
Route::put('/products/edit/{id}', [ProductController::class, 'update'])->name('products.edit');

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
Route::put('/category/edit/{id}', [CategoryController::class, 'update'])->name('category.edit');

Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::post('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::delete('/customer/delete/{id}', [CustomerController::class, 'destroy'])->name('customer.delete');
Route::put('/customer/edit/{id}', [CustomerController::class, 'update'])->name('customer.edit');