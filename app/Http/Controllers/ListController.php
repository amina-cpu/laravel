<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function showHomepage()
    {
        
        $products = Product::with(['images', 'colors'])->get();
        return view('full-list', compact('products'));
    }
}
