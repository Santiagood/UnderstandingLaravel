<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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
//Laravel 8 (new)
Route::get('/products', [ProductsController::class, 'index']);

//patter is integer
//Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');

//pattern is string
Route::get('/products/{name}', [ProductsController::class, 'show']) -> where('name', '[a-zA-Z]+');

//double slash
Route::get('/products/{name}/{id}', [ProductsController::class, 'show']) -> where([
    'name' => '[a-z]',
    'id' => '[0-9]'
]);

// Route::get('/products/{name}', [ProductsController::class, 'show']);

// Route::get('/products/about', [ProductsController::class, 'about']);

// //Laravel 8 (also new)
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');

// //Before Laravel 8 (not working anymore)
// Route::get('/products', 'ProductsController@index');
