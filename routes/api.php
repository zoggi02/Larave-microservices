<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('products', ProductController::class);
Route::get('user', [UserController::class, 'random']);

// Route::get('products', [ProductController::class, 'index']);
// Route::get('products/{id}', [ProductController::class, 'show']);
// Route::post('products', [ProductController::class, 'store']);
// Route::put('products/{id}', [ProductController::class, 'update']);
// Route::delete('products/{id}', [ProductController::class, 'destroy']);