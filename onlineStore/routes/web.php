<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CommentController;
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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name("cart.delete");
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");

Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase");
    Route::get('/my-account/orders', 'App\Http\Controllers\MyAccountController@orders')->name("myaccount.orders");
});

Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
    Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
    Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
});

//creamos una routa para llamar el method del adminController y ver estadisticas de nuestra aplicacion
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard.index');

//anadimos esta nueva ruta que usa el methodo "store" en el contollador "commentController" para manejar la creacion de commentarios
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
Route::post('/products/{id}/comments', 'App\Http\Controllers\CommentController@store')->name("product.comments.store");
Route::post('/comments/{product_id}', 'CommentController@store')->name('comments.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name("product.show");
Route::post('/products/{id}/comments', [CommentController::class, 'store'])->name("product.comments.store");
Route::post('/comments/{product_id}', [CommentController::class, 'store'])->name('comments.store');

// Ruta para procesar la compra en el carrito
Route::post('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name('cart.purchase');

Auth::routes();
