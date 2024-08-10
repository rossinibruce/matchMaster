<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index ()
    {
        return view('login');
    }

    public function authenticate (LoginRequest $request)
    {
        $credentials = [
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'general' => 'Um erro ocorreu! Tente novamente mais tarde.',
        ]);
    }
}
