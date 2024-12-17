<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


use App\Http\Controllers\ProductDescription;

// Route for homepage, which fetches products
Route::get('/homepage', [ProductController::class, 'showHomepage']);
Route::get('/product/{id}', [ProductDescription::class, 'show'])->name('product.description');

use App\Http\Controllers\TestController;

Route::get('/send-email', [TestController::class, 'sendEmail']);
