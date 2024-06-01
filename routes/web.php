<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryProductsController;
use App\Http\Controllers\ProductsController;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/category-products', [CategoryProductsController::class, "index"])
    ->middleware("auth:sanctum");
Route::get('/api/category-products/{id}', [CategoryProductsController::class, "show"])
    ->middleware("auth:sanctum");
Route::post('/api/category-products', [CategoryProductsController::class, "store"])
    ->middleware("auth:sanctum");
Route::post('/api/category-products/{id}', [CategoryProductsController::class, "update"])
    ->middleware("auth:sanctum");
Route::delete('/api/category-products/{id}', [CategoryProductsController::class, "destroy"])
    ->middleware("auth:sanctum");

Route::get('/api/products', [ProductsController::class, "index"])
    ->middleware("auth:sanctum");
Route::get('/api/products/{id}', [ProductsController::class, "show"])
    ->middleware("auth:sanctum");
Route::post('/api/products', [ProductsController::class, "store"])
    ->middleware("auth:sanctum");
Route::post('/api/products/{id}', [ProductsController::class, "update"])
    ->middleware("auth:sanctum");
Route::delete('/api/products/{id}', [ProductsController::class, "destroy"])
    ->middleware("auth:sanctum");

Route::post("/api/register", [AuthenticationController::class, "register"]);
Route::post("/api/login", [AuthenticationController::class, "login"]);
Route::get("/api/logout", [AuthenticationController::class, "logout"])
    ->middleware("auth:sanctum");

Route::get('/api/token', fn () => csrf_token());
