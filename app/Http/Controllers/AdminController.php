<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
            if(auth()->attempt([$request->input('email'), $request->input('password')])){
                return redirect()->route('adminHome');
            }
            return redirect()->route('adminLogin')->with('error', 'Incorrect Credentials');
    }
    //
}
