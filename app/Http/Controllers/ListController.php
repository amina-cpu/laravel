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
    public function showCategory($categoryName = null)
    {
        if ($categoryName) {
            // Filter products by category name
            $products = Product::whereHas('category', function ($query) use ($categoryName) {
                $query->where('name', $categoryName);
            })->with(['images', 'colors'])->get();
        } else {
            // Show all products if no category is specified
            $products = Product::with(['images', 'colors'])->get();
        }

        return view('full-list', compact('products'));
    }
}
