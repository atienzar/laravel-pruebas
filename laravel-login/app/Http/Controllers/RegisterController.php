<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function show(){
        if(Auth::check() ){
            return redirect('/home');
        }
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        //dd($request);
        $user = User::create($request->validated() ); 
        
        /*$user = new User;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save(); 
        */

         //print_r($user);
         return redirect('/login')->with('success' , 'Account created successfully');
    }

}

