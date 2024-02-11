<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerPost(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->tanggal = $request->tanggal;
        $user->line = $request->line;
        $user->nomor = $request->nomor;
        $user->tim = $request->tim;

        $user->save();

        // return back()->with('success', 'Register Succesfully');
        return redirect()->route('login')->with('success', 'Register Succesfully');
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect('/home')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email or Password salah');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
