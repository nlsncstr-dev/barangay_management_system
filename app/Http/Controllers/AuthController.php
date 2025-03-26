<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // public function showRegisterForm()
    // {
    //     return view('users.register');
    // }

    // public function showLoginForm()
    // {
    //     return view('users.login');
    // }
    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'first_name' => 'required|string|max:255',
    //         'middle_name' => 'nullable|string|max:255',
    //         'last_name' => 'required|string|max:255',
    //         'contact_number' => 'required|string|max:20',
    //         'email' => 'required|email|max:255|unique:users,email', 
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);

    //     $user = User::create([
    //         'first_name' => $request->first_name,
    //         'middle_name' => $request->middle_name,
    //         'last_name' => $request->last_name,
    //         'contact_number' => $request->contact_number,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     Auth::login($user);

    //     return redirect()->route('home')->with('success', 'Registration successful!');
    // }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|string',
    //         'password' => 'required|string|min:6',
    //     ]);

    //     if (Auth::attempt($request->only('email', 'password'))) {
    //         return redirect()->route('barangay')->with('success', 'Login successful!');
    //     }

    //     return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    // }


    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect('/');
    
    // }
}
