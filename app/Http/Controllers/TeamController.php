<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeamController extends Controller
{
    public function team(){
        return view('createTeam');
    }

    public function teamPost(Request $request){
        $user = new Team();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->tanggal = $request->tanggal;
        $user->line = $request->line;
        $user->nomor = $request->nomor;

        $user->save();

        // return back()->with('success', 'Register Succesfully');
        return redirect('/home')->with('success', 'Login berhasil');
    }

}
