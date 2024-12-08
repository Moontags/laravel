<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
       $attributes = request()->validate([

            'email' => ['required', 'email'],
            'password' => ['required']
          ]);

          if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'sorry, those credentials do not match.'
            ]);
          }
        // session token security with regenerator
          request()->session()->regenerate();

          return redirect('/jobs');
    }

    public function destroy($id = null)
    {
        Auth::logout();

        return redirect('/')->with('message', 'Logged out successfully');
    }
}
