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

//route that sends back a view
Route::get('/', function () {
    return view('welcome');
});

//Route to users - String
Route::get('/users', function (){
    return 'Welcome to the users page';
});

//route to users - Array(JSON)
Route::get('/users', function() {
    return ['php', 'html', 'laravel'];
});

//route to user - JSON
Route::get('/users', function() {
    return response()->json([
        'name' => 'Rainier',
        'course' => 'BSIT'
    ]);
});

//route to user - function
Route::get('/users', function() {
    return redirect('/');
});
