<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\CompanyController;
use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//private routers
Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [UserController::class, 'user']);
    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders', [OrderController::class, 'store']);
});


//public routes
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/search/{product}', [ProductController::class, 'search']);
Route::get('/products/{product:slug}', [ProductController::class, 'show']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);



