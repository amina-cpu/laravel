<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\CheckoutMail;
class CheckoutController extends Controller
{
    public function showForm()
    {
        // Logic to show the checkout form
        return view('checkout');
    }
    public function submitOrder(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'address' => 'required|string|max:255',
        ]);
        $cartItems = session('cart', []); // Get cart items from session

        // Calculate the total price of the order
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        $order = (object) [
            'order_number' => 'ORD' . strtoupper(uniqid()),
            'customer_name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'province' => $request->input('province'),
            'zip_code' => $request->input('zip_code'),
            'total' => $total, // For simplicity, assuming a static total
            'items' =>  $cartItems ,
        ];
    
        // Send the email to the user
        Mail::to(Auth::user()->email)->send(new CheckoutMail($order));
        session()->forget('cart'); // Remove cart from session
        // Redirect or show confirmation
        return redirect('/homepage');
    }
}