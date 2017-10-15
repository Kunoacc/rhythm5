<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function devotional(){
        return view('devotionals');
    }

    public function devotionalDays($day){

    }
    //

}
