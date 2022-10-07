<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    function registeruser(Request $request)
    {
        $request->validate([
            'name'              =>   'required',
            'email'             =>   'email:rfc,dns|required|email|unique:users',
            'password'          =>   'required|min:6',
            'confirmPassword'   =>   'required|min:6'
        ]);

        $data = $request->all();
    
        if($data['password'] == $data['confirmPassword']){
            User::create([
                'name'  =>  $data['name'],
                'email' =>  $data['email'],
                'password' => Hash::make($data['password'])
            ]);
   
            return redirect('login')->with('message', 'Registration Successful');
        }

        return redirect('register')->with('message', 'Passwords does not match');
    }

    function loginuser(Request $request)
    {
        $request->validate([
            'email'         =>  'required',
            'password'      =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('landing');
        }

        return redirect('login')->with('message', 'Incorrect email or password');
    }

    function landing()
    {
        if(Auth::check())
        {
            return view('landing');
        }

        return redirect('login')->with('message', 'Unauthorized Access. Login first');
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}

