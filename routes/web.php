<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
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

Route::get('/', function ()
{
    return view('welcome');
})->middleware( 'guest' );

Route::middleware( 'auth' )->group( function ()
{
    Route::get('/home', [HomeController::class, 'index']);

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/{id}', [UserController::class, 'edit']);
    Route::put('/user/{id}', [UserController::class, 'update']);

    Route::get('/item', [ItemController::class, 'index']);
    Route::get('/item/create', [ItemController::class, 'create']);
    Route::post('/item', [ItemController::class, 'store']);
    Route::get('/item/{id}', [ItemController::class, 'edit']);
    Route::put('/item/{id}', [ItemController::class, 'update']);
});
