<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');

Route::post('/products/create', [ProductsController::class, 'store'])->name('products.store');

Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');





Route::get('/products/{id}', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductsController::class, 'update'])->name('products.update');




// Route::delete('products/{id}', 'ProductsController@destroy')->name('products.destroy');
// Route::delete('products/product', [ProductsController::class, 'destroy'])->name('products.destroy');
// Route::delete('products/product', [ProductsController::class, 'delete']);
