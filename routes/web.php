<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route for homepage, which fetches products
Route::get('/homepage', [ProductController::class, 'showHomepage']);
