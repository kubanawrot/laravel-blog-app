<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'You have been logged out.');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'exists:users,email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'You have been logged in!');
        }

        return back()->withInput()->withErrors(['email' => 'Provided credentials do not match our records.', 'password' => 'Provided credentials do not match our records.']);
    }
}
