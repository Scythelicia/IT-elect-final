<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle the login logic
    public function login(Request $request)
    {
        // Validate login credentials
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect to home if login is successful
            return redirect()->route('home');
        }

        // If login fails, redirect back with an error message
        return back()->withErrors(['email' => 'Invalid login credentials.']);
    }

    // Display the home page after login
    public function home()
    {
        return view('home');
    }
}
