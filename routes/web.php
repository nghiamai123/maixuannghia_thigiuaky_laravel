<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;
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


// Route::get('/allCar', [CarController::class, 'index']);

// Route::prefix('car')->group(function () {
//     Route::get('/show/{id}', [CarController::class, 'show'])->name('showCardetail.car-detail');

//     Route::post('edit/{id}', [CarController::class, 'edit'])->name('editCar.car-detail');
// });

// Route::get('/getCar/{id}', [CarController::class, 'show'])->name('show.car-detail');

Route::resource('cars', CarController::class);

// Route::get('/car-create', [CarController::class, 'create'])->name('car-create');
