<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\CartController;

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

Route::get('/subscription', [PlansController::class, 'index']);
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart']);
Route::post('/apply-cupon', [CartController::class, 'applyCupon']);

Route::get('/delete-cupon/{code}', [CartController::class, 'deleteCupon']);



Route::view('/wiki', 'wiki');
Route::view('/project', 'project');

Route::view('/about', 'about');
Route::view('/cart', 'cart');
Route::view('/account', '/account-subviews/profile');
Route::view('/account/subscription', '/account-subviews/subscription');
Route::view('/account/address', '/account-subviews/address');
Route::view('/account/purchases', '/account-subviews/purchase-history');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
