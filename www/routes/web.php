<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\emailVerify;
use App\Http\Controllers\User\UserDataChange;

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;


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

class PublicRoutes
{
    /**
     * @param \Illuminate\Routing\Router $router
     */
    public static function route(\Illuminate\Routing\Router $router): void
    {
        $router->get("/", "HomeController@index");
    }
}

/***User***/
Auth::routes(['verify' => true]);
Route::get('/shop/account/email/verification', [emailVerify::class, 'view'])->name('verify');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('/admin/panel/', AdminController::class);
    Route::resource('/admin/panel/roles', RoleController::class);
    Route::resource('/admin/panel/users', UserController::class);
    Route::resource('/admin/panel/products', ProductController::class);
});

Route::middleware(['verified'])->group(function () {
    /**********User*******/
    Route::get('/shop/account', [HomeController::class, 'index'])->name('home');

    Route::get('/shop/orderList', function () {
        return view('layout.user.orders');
    })->name('orders');

    Route::post('/shop/account/change', [UserDataChange::class, 'CheckData'])->name('DataChange');


});
Route::get('/shop/account/resetPass', function () {
    return view('auth.passwords.email');
})->name('reset');
/******Shop******/
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/shop/product', function () {
    return view('layout.shop.product');
})->name('product');

Route::get('/shop/cart', function () {
    return view('layout.shop.cart');
})->name('cart');

Route::get('/shop/products', function () {
    return view('layout.shop.products');
})->name('products');
/******index*************/
Route::get('/info/payment', function () {
    return view('layout.shop.payment');
})->name('payment');

Route::get('/info/policy', function () {
    return view('layout.shop.policy');
})->name('policy');

Route::get('/info/shipping', function () {
    return view('layout.shop.shipping');
})->name('InfoShipping');

Route::get('/info/about', function () {
    return view('layout.shop.about');
})->name('about');



