<?php

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

Route::get('/', function () {
    return view('welcome');
});
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