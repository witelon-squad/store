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
use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\DeliveryController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Shop\ShopController;
use App\Http\Controllers\Shop\CartController;
use App\Http\Controllers\Shop\OrderController;


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
        Route::resource('/admin/panel/ad', AdController::class);
        Route::resource('/admin/panel/settings', SettingsController::class);
        Route::resource('/admin/panel/content', ContentController::class);
        Route::resource('/admin/panel/delivery', DeliveryController::class);

        Route::resource('/admin/panel/roles', RoleController::class);
        Route::resource('/admin/panel/users', UserController::class);
        Route::resource('/admin/panel/products', ProductController::class);
        Route::resource('/admin/panel/orders', OrdersController::class);
        Route::get('/admin/panel/warehouse/sync', [WarehouseController::class,'SyncStorage'])->name('sync');
        Route::get('/shop/account', [HomeController::class, 'index'])->name('home');


        Route::get('/shop/orderList',[OrderController::class,'getOrder'])->name('orders');

        Route::post('/shop/account/change', [UserDataChange::class, 'CheckData'])->name('DataChange');

        Route::get('/shop/order', [OrderController::class, 'index'])->name('CheckOrder');

        Route::post('/shop/order/complete', [OrderController::class, 'create'])->name('CompleteOrder');

    });

Route::middleware(['verified'])->group(function () {
    /**********User*******/



});
Route::get('/shop/account/xdd', function () {
    return view('shop.orderComplete');
})->name('xd');


    Route::get('email/verification',[emailVerify::class, 'view']);
    Route::get('/shop/account/resetPass', function () {
        return view('auth.passwords.email');
    })->name('reset');
    /******Shop******/
    Route::get('/', [AdController::class, 'ShowAd'])->name('index');
/*************Products,sorting,search****************/
    Route::get('/shop/products',[ShopController::class,'index'])->name('products');
    Route::get('/shop/product/{id}',[ShopController::class,'SingleProduct'])->name('product');
    Route::get('/shop/products/category/{id}',[ShopController::class,'index'])->name('sort_products_by_category');
    Route::post('/shop/products/search/',[ShopController::class,'SearchProducts'])->name('search_products');

/********Cart*********/
    Route::get('/shop/cart', [CartController::class,'cart'])->name('cart');

    Route::get('/shop/products/{id}', [CartController::class,'addToCart']);


    Route::get('/shop/cart/remove-from-cart/{id}', [CartController::class,'remove']);
/******index*************/
    Route::get('/info/payment', [ContentController::class,'ShowPayment'])->name('payment');

    Route::get('/info/policy', [ContentController::class,'ShowPolicy'])->name('policy');

    Route::get('/info/shipping', [DeliveryController::class,'ShowShipping'])->name('InfoShipping');

    Route::get('/info/about', [ContentController::class,'ShowAbout'])->name('about');

    Route::get('/info/refunds', [ContentController::class,'ShowRefunds'])->name('refunds');



