<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::middleware('api')->group(function () {
Route::post('/createUser', [UserController::class, 'createUser'])->name('createUser');



Route::post('/createProduct', [ProductController::class, 'createProduct'])->name("createProduct");

Route::get('/showProduct', [ProductController::class, 'showProducts']);

});
