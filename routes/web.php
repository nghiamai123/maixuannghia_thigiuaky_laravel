<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', function () {
//     return view('layout/home');
// });

Route::get('/', function () {
    $products = Product::all();
    return view('blacks/products', compact('products'));
});

Route::get('/details/{id}', function ($id) {
    $product = Product::find($id);
    return view('blacks/details', compact('product'));
});

Route::get('/products', [ProductController::class, 'index']);

// Route::get('/{id}', [ProductController::class, 'show'])->name('.detail');

// Route::resource('s', Controller::class);

Route::get('products/create', [ProductController::class, 'create'])->name('create');
Route::post('products/create', [ProductController::class, 'store']);

Route::get('products/{id}/edit', [ProductController::class, 'edit']);
Route::put('products/{id}/edit', [ProductController::class, 'update'])->name('update');

Route::get('products/{id}/delete', [ProductController::class, 'destroy']);
Route::post('products/search', [ProductController::class, 'search'])->name('search');
