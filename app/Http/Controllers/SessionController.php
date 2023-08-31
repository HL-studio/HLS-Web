<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    //
    function index (){
        return view('sesi/index');
    }
    function login(Request $request){

        session(['email' => $request->email]);
    
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=> 'Email wajib diisi',
            'password.required'=> 'Password wajib diisi',
        ]);
    
        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];
    
        if(Auth::attempt($infologin)){
            // Autentikasi berhasil
            return redirect('landing')->with('success','Berhasil Login');
        } else {
            // Autentikasi gagal
            return redirect('sesi')->withErrors ('Username dan password tidak valid');
        }
    }

    //FUNGSI LOGOUT
    function logout(){
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil logout');
    }

    //FUNGSI REGISTER
    function register(){
        return view('sesi/index');
    }
    
    function create(Request $request){


        session(['name' => $request->name]);
        session(['email' => $request->email]);
    
        $request->validate([
            'name'=>'required',
            'email'=>'required | email | unique:users',
            'password'=>'required | min:6'
        ],[
            'name.required'=> 'Nama wajib diisi',
            'email.required'=> 'Email wajib diisi',
            'email.email'=> 'Silahkan masukan email yang valid',
            'email.unique'=> 'Email sudah pernah digunakan, silahkan masukan email yang lain',
            'password.required'=> 'Password wajib diisi',
            'password.min'=> 'Password minimun digunakan 6 karakter',
        ]);

        $data = [
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ];

        User::create($data);
    
        $inforegister = [
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ];
    
        if(Auth::attempt($inforegister)){
            // Autentikasi berhasil
            return redirect('sesi')->with('success', 'Hai ' . Auth::user()->name . ' Kamu Berhasil silahkan Login');
        } else {
            // Autentikasi gagal
            return redirect('sesi')->withErrors ('Username dan password tidak valid');
        }
    }
}
