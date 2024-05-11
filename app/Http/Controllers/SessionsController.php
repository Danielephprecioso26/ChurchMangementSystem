<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($attributes)) {
            $user = Auth::user();
            $token = $user->createToken('personal-access-token')->plainTextToken;

           

            return redirect('dashboard')->with(['success' => 'You are logged in.', 'token' => $token]);

        } else {
            return back()->withErrors(['email' => 'Email or password invalid.']);
        }
    }

    public function destroy()
    {
        $user = Auth::user();
        $user->tokens()->delete();
        Auth::guard('web')->logout();

   

        return redirect('/login')->with(['success' => 'You have been logged out.']);
    }
}


