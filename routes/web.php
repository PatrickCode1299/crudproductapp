<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('user.register', ['response' => '']);
})->name('register');

Route::post('/createUser', [UserController::class, 'createUser'])->name('createUser');
Route::get('/product', function () {
return view('product.create_product');
});

Route::post('/createProduct', [ProductController::class, 'createProduct'])->name("createProduct");

Route::get('/showProduct', [ProductController::class, 'showProducts']);

//Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
