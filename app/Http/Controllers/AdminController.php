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
                return 'success';
            }
            return 'incorrect credentials';
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('adminLogin');
    }
    //
}
