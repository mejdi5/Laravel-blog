<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //logout
    public function destroy() {
        auth()->logout();
        return redirect('/')->with('success', 'Logged out with success');
    }

    //login
    public function create() {
        return view('login.create');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        //login success
        if(auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'Logged In with success');
        }
        //login fail
        throw ValidationException::withMessages([
            'error' => 'wrong credentials.'
        ]);
    }
}