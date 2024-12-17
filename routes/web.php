<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDescription;
use App\Http\Controllers\TestController;

Route::get('/registration', function () {
    return view('registration');
});

Route::post('/registration', [App\Http\Controllers\RegistrationController::class, 'store']);

// Route for homepage, which fetches products
Route::get('/homepage', [ProductController::class, 'showHomepage']);
Route::get('/product/{id}', [ProductDescription::class, 'show'])->name('product.description');
Route::get('/send-email', [TestController::class, 'sendEmail']);


