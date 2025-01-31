<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/persons', [PersonController::class, 'index']);
Route::get('/persons/{id}', [PersonController::class, 'show']);
Route::post('/persons', [PersonController::class, 'store']);
Route::put('/persons/{id}', [PersonController::class, 'update']);
Route::delete('/persons/{id}', [PersonController::class, 'delete']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}' , [ProductController::class, 'update']);
Route::delete('/products/{id}' , [ProductController::class, 'delete']);