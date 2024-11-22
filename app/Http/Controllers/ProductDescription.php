<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDescription extends Controller
{
    public function show($id)
    {
        // Fetch the product with its images and other relationships
        $product = Product::with(['images', 'colors'])->findOrFail($id);

        // Pass the product to the view
        return view('dex', compact('product'));
    }
}
