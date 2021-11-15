<?php

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
Route::delete('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');
Route::put('/products/edit/{id}', [ProductController::class, 'update'])->name('products.edit');