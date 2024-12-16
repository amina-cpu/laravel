<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showHomepage()
    {
        
        $products = Product::with(['images', 'colors'])->get();
        return view('index', compact('products'));
    }
}
