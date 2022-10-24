<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/register',[MainController::class, 'registerPage']);
Route::get('/login', [MainController::class, 'loginPage']);
Route::get('/gaming-product', [MainController::class, 'allProductGaming']);
Route::get('/camera-product', [MainController::class, 'allProductCamera']);
Route::get('/sport-product', [MainController::class, 'allProductSport']);
Route::get('/user-detail-product', [MainController::class, 'detailProduct']);
Route::get('/search-product',[MainController::class,'searchProduct']);
Route::get('/home-admin',[MainController::class,'adminHome']);
Route::get('/manage-product', [MainController::class, 'manageProduct']);
Route::get('/add-product', [MainController::class, 'addProduct']);
Route::get('/profile', [MainController::class, 'profile']);
Route::get('/cart', [MainController::class, 'cart']);
Route::get('/history', [MainController::class, 'history']);