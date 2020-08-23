<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;
class login extends Controller
{
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('pass');
        $passwordhash = Hash::make($password);
        $user = User::where('email' , $email)->first();
        if(Hash::check($password, $user->password)){
            Auth::login($user);
            return redirect()->route('home');
        }
    }
}
