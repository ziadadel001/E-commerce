<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Display the signup page
    function Showsignup()
    {
        return view('Registration.signin');
    }

    // Handle the signup process
    public function signup(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:users',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
        } catch (ValidationException $e) {
            // Redirect back with input and validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        // Create the user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in
        Auth::login($user);

        // Redirect to intended route
        return redirect()->intended(route('landing.index'));
    }

    // Display the login page
    function Showlogin()
    {
        return view('Registration.login');
    }

    // Handle the login process
    function login(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
        } catch (ValidationException $e) {
            // Redirect back with input and validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended(route('landing.index'));
        }

        // Authentication failed...
        return redirect()->back()->withErrors(['message' => 'Invalid credentials'])->withInput();
    }

    // Handle the logout process
    public function logout()
    {
        Auth::logout();
        return redirect()->route('landing.index'); // Redirect to the landing page or any other route you prefer
    }
}
