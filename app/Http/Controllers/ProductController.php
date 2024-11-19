<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showHomepage()
    {
        // Fetch all products with their associated colors
        $products = Product::with('colors')->get();

        // Pass the products to the homepage view
        return view('index', compact('products'));
    }
}
