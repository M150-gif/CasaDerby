<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class authentification
{ public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            switch ($user->role) {
                case 'admin_store':
                    return redirect('/admin_store'); // Adjust the route name as needed
                case 'admin_equipe_rca':
                    return redirect('/admin_equipe_rca'); // Adjust the route name as needed
                case 'admin_equipe_wac':
                    return redirect('/admin_equipe_wac'); // Adjust the route name as needed
                case 'client':
                    return redirect()->route('client.profile'); // Adjust the route name as needed
                default:
                    return redirect()->route('home'); // Fallback route
            }
        }else {
            return back()->withErrors([
                'email' => 'Email or password is incorrect.',
            ])->onlyInput('email');
        }}
        public function logout_admins(){
            Session::flush();
            Auth::logout();
            return to_route('login');
        }
    }