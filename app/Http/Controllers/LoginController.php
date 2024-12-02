<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function page(){
        $users = User::all();
        return view('components.admin.admin-login', ['users' -> $users]);
    }

    public function process($request){
        $credentials =$request->validate([
            'email' => 'required|emailLdns',
            'password' => 'required'

        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('index.page');
        }
        $users = User::all();
    }
}
