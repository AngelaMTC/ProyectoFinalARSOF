<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;


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

//LOGIN/REGISTER:
// Route::get('/index', function () {
//     return view('products.index');
// })->middleware('auth');
Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login.create');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy');

//REDICT ADMIN(Profesor):
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');



//CRUD:
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');

Route::post('/products/create', [ProductsController::class, 'store'])->name('products.store');

Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');

Route::get('/products/{id}', [ProductsController::class, 'edit'])->name('products.edit');

Route::put('products/{id}', [ProductsController::class, 'update'])->name('products.update');
