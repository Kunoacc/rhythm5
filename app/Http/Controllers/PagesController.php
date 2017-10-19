<?php

namespace App\Http\Controllers;

use App\Devotional;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function devotionalDays($day){
        $devotional = Devotional::where('date', $day)->first();
        return view('devotional', ['data' => $devotional]);
    }
    //

}
