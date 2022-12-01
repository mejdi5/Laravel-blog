<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule as ValidationRule;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => 'required',
            'username' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255', ValidationRule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:255']
        ]);
        $attributes['password'] = bcrypt($attributes['password']);
        $user = User::create($attributes);
        auth()->login($user);
        return redirect('/')->with('success', 'Registered with success..');
    }
}