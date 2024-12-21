<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegistrationController extends Controller
{
    public function store(Request $request)
{
    // Debug: Log incoming request
    \Log::info('Request Data:', $request->all());

    // Validate input
    $validated = $request->validate([
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Debug: Check validation
    \Log::info('Validation passed.');

    // Create a new user and save to the database
    $user = User::create([
        'name' => $validated['firstName'] . ' ' . $validated['lastName'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
    ]);

    // Debug: Log user creation
    \Log::info('User created:', $user->toArray());

    // Redirect with success message
    return redirect('/homepage');
}

}