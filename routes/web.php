<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDescription;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ListController;

Route::get('/signup', function () {
    return view('signup');
})->name('signup');  // Give it a name like 'signup'

Route::post('/signup', [App\Http\Controllers\RegistrationController::class, 'store']);

// Route for homepage, which fetches products
Route::get('/homepage', [ProductController::class, 'showHomepage']);
Route::get('/product/{id}', [ProductDescription::class, 'show'])->name('product.description');
Route::get('/send-email', [TestController::class, 'sendEmail']);
Route::get('/full-list', [ListController::class, 'showHomepage']);


