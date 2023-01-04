<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/search-product',[HomeController::class,'searchProduct']);
Route::get('/home-admin',[MainController::class,'adminHome']);

Route::get('/add-product', [MainController::class, 'addProduct']);
Route::get('/edit-product/{id}', [MainController::class, 'editProduct']);
Route::patch('/product/update', [MainController::class, 'updateProduct']);
Route::get('/profile', [MainController::class, 'profile']);
Route::get('/cart', [MainController::class, 'cart']);
Route::get('/history', [MainController::class, 'history']);

Route::get('/product/search', [HomeController::class, 'searchProduct']);
Route::get('/product-category/{category}', [HomeController::class, 'productCategory']);
Route::post('/product/store', [MainController::class, 'storeProduct']);
Route::delete('/delete/{id}', [MainController::class, 'destroyProduct']);
Route::get('/product/{id}', [HomeController::class, 'product']);
Route::get('/manage-product', [MainController::class, 'manageProduct']);
Route::get('/manage-product/search', [MainController::class, 'searchManageProduct']);

Route::post('/purchase/addcart', [MainController::class, 'addCart']);
Route::post('/purchase/checkout', [MainController::class, 'checkout']);
Route::delete('/cart/delete/{id}', [MainController::class, 'destroyCart']);

Auth::routes();
