<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDescription;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

// Routes for signup and login
Route::middleware(['web'])->group(function () {
    Route::get('/signup', function () {
        return view('signup');
    })->name('signup');
    Route::post('/signup', [App\Http\Controllers\RegistrationController::class, 'store']);

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Routes for authenticated users
Route::middleware(['auth'])->group(function () {
    Route::get('/homepage', [ProductController::class, 'showHomepage'])->name('homepage');
    Route::get('/product/{id}', [ProductDescription::class, 'show'])->name('product.description');
    Route::get('/send-email', [TestController::class, 'sendEmail']);
    Route::get('/full-list', [ListController::class, 'showHomepage'])->name('full-list');

    // Cart-related routes
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/cart', [CartController::class, 'view'])->name('cart.view');

    // Checkout-related routes
    Route::get('/checkout', [CheckoutController::class, 'showForm'])->name('checkout.form');
    Route::post('/checkout', [CheckoutController::class, 'submitOrder'])->name('checkout.submit');
    Route::get('/checkout/success', function () {
        return view('checkout-success');
    })->name('checkout.success');
});

// Routes for category listing
Route::get('/category/{categoryName?}', [ListController::class, 'showCategory'])->name('category');
