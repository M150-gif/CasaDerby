<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class authentification extends Controller
{
    public function Login(Request $request){
        $validates=[
            "email"=>"required","password"=>"required"
        ];
        if(Auth::attempt($validates)){
            $user=Auth::user();
            if($user->role=="admin_store"){
                $request->session()->regenerate();
                return redirect()->route('/');
            }elseif($user->role=="admin_equipe_rca"){
                $request->session()->regenerate();
                return redirect()->route('/');
            }else{
                $request->session()->regenerate();
                return redirect()->route('/');
            }
        }else{
            return back()->withErrors([
                'email' => 'Email ou mot de passe est incorrect. '
            ])->onlyInput('email');
        }
    }
}
