<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\emailVerify;
use App\Http\Controllers\User\UserDataChange;

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\WarehouseController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Shop\ShopController;
use App\Http\Controllers\Shop\CartController;


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
    Route::get('/admin/panel/warehouse/sync', [WarehouseController::class,'SyncStorage'])->name('sync');
    Route::get('/shop/account', [HomeController::class, 'index'])->name('home');
    Route::get('/shop/orderList', function () {
        return view('user.orders');
    })->name('orders');
    Route::post('/shop/account/change', [UserDataChange::class, 'CheckData'])->name('DataChange');

});

Route::middleware(['verified'])->group(function () {
    /**********User*******/


});
Route::get('/shop/account/resetPass', function () {
    return view('auth.passwords.email');
})->name('reset');
/******Shop******/
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/shop/products',[ShopController::class,'show'])->name('products');
/********Cart*********/
Route::get('/shop/cart', [CartController::class,'cart'])->name('cart');

Route::get('/shop/products/{id}', [CartController::class,'addToCart']);

Route::patch('/shop/cart/update-cart', [CartController::class,'update']);

Route::delete('/shop/cart/remove-from-cart', [CartController::class,'remove']);
/******index*************/
Route::get('/info/payment', function () {
    return view('shop.payment');
})->name('payment');

Route::get('/info/policy', function () {
    return view('shop.policy');
})->name('policy');

Route::get('/info/shipping', function () {
    return view('shop.shipping');
})->name('InfoShipping');

Route::get('/info/about', function () {
    return view('shop.about');
})->name('about');



