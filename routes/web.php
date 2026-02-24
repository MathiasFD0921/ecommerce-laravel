<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('shop');
Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');