<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request, Product $product)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $request->input('quantity', 1);
        } else {
            $cart[$product->id] = [
                "name" => $product->name,
                "quantity" => $request->input('quantity', 1),
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart!');
    }

    public function view()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }
}