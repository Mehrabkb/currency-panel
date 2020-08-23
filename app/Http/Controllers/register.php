<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class register extends Controller
{
    public function signup(Request $request){
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $user = new User();
        $user->name = $username;
        $user->email = $email;
        $user->role_id = 2; 
        $user->password = Hash::make($password);
        
        if($user->save()){
            Auth::login($user);
            return redirect()->route('home');
        }

    }
}
