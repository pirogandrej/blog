<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function registerForm(){
        return view('pages.register');
    }

    public function register(Request $request){
        $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required'
        ]);
        $user = User::add($request->all());
        $user->generatePassword($request->get('password'));
        return redirect('/login');
    }

    public function loginForm(request $request){
        dd($request->all());
        return view('pages.login');
    }

}
