<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('nickname', 'password');

        if (Auth::attempt(['nickname' => $credentials['nickname'], 'password' => $credentials['password']])) {
            return redirect()->route('index');
        }

        return back()->withErrors([
            'nickname' => 'The provided credentials do not match our records.',
        ]);
    }
    public function register(Request $request)
    {
        $request->validate([
            'nickname' => 'required|string|unique:users|max:255',
            'email' => 'required|string|unique:users|email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'terms' => 'accepted',
        ]);

        $user = User::create([
            'nickname' => $request->nickname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}