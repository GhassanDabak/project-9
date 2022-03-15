<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('users', [UserController::class, 'indexReact']);
Route::get('add-user', [UserController::class, 'addReact']);
Route::get('edit-user/{id}', [UserController::class, 'editReact']);
Route::put('update-user/{id}', [UserController::class, 'updateReact']);
Route::post('insert-user', [UserController::class, 'insertReact']);


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
