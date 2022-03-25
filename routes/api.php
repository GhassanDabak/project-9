<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::get('/categories', [CategoryController::class, 'reactIndex']);

Route::get('/products/{id}', [ProductController::class, 'productsOnId']);
Route::get('products', [ProductController::class, 'reactProducts']);
Route::get('cat-products/{id}', [ProductController::class, 'cat_products']);

Route::post('order', [OrderController::class, 'insertReact']);
Route::post('order-item',[OrderController::class, 'orderItem']);
