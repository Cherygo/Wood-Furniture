<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'login' => 'required|unique:users,login|max:255',
            'email' => 'required|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'login' => $validated['login'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Successfully logged in');

    }
}
