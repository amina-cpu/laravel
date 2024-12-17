<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            
        ]);

         // Create a new user and save to the database
         $user = User::create([
            'name' => $validated['firstName'] . ' ' . $validated['lastName'], // Combine first and last names for the 'name' field
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
           
           
        ]);
        // For now, just redirect with a success message
        return redirect('/registration')->with('success', 'You\'ve successfully registered to our awesome app!');
    }
}