<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

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
// BASIC ROUTES
Route::view('/wiki', 'wiki');
Route::view('/project', 'project');
Route::view('/about', 'about');


// SHOPPING CART'S ROUTES
Route::get('/box', [PlansController::class, 'index']);
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart']);
Route::post('/apply-cupon', [CartController::class, 'applyCupon']);
Route::get('/delete-cupon/{code}', [CartController::class, 'deleteCupon']);

//RESTRINGED ROUTES

Auth::routes();
Route::get('/register', function() {
    return redirect('/login');
});

Route::post('/register', function() {
    return redirect('/login');
});
View::composer('layout.home', function ($view) {
    $view->with('name', Auth::check() ? Auth::user()->name : '')
        ->with('lastname', Auth::check() ? Auth::user()->last_name : '');
}
);


Route::group(['middleware' => ['auth']], function () {

   Route::view('/profile', '/home-subviews/profile')->name('profile');
    Route::view('/address', '/home-subviews/address')->name('address');
    Route::view('/profile-edit', '/home-subviews/profile-edit')->name('profile-edit');;
    Route::view('/password-edit', '/home-subviews/password-edit')->name('password-edit');
    Route::view('/address-edit', '/home-subviews/address-edit');
});


/* CUSTOMER DASHBOARD ROUTES*/
Route::get('/subscription', [HomeController::class, 'showSubscription'])->name('subscription');
Route::get('/purchases', [HomeController::class, 'showPurchases'])->name('purchase-history');
Route::post('/subscription-edit/{id}', 'App\Http\Controllers\HomeController@showSubscriptionPlanUpgrade');
Route::post('/update-profile/{id}', 'App\Http\Controllers\HomeController@updateProfile');
Route::post('/update-address/{id}', 'App\Http\Controllers\HomeController@updateAddress');
Route::post('/update-password', 'App\Http\Controllers\HomeController@updatePassword');
Route::post('/cancel-subscription/{id}', 'App\Http\Controllers\HomeController@cancelSubscription');


Route::post('/payment', 'App\Http\Controllers\CartController@payment');
Route::post('/change-subscription/{id}', 'App\Http\Controllers\CartController@changeSubscription');

Route::any('{query}',
    function() { return redirect('/'); })
    ->where('query', '.*');

