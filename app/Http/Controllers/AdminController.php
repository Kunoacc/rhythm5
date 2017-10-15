<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('login');
    }

    public function login(){
            if(auth()->attempt(request(['email', 'password']))){
                return redirect()->route('adminHome');
            }
            return redirect(route('adminLogin'))->with('error', 'Incorrect Credentials');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('adminLogin');
    }
    //
}
