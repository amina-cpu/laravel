<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate the login request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log in the user
        if (Auth::attempt($request->only('email', 'password'))) {
            // Regenerate session to prevent fixation attacks
            $request->session()->regenerate();

            return redirect()->intended('/homepage')->with('success', 'You are logged in.');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Invalidate the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'You have been logged out.');
    }
    public function showLoginForm()
{
    return view('login'); // Ensure this view exists
}
}
