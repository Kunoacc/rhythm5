<?php

namespace App\Http\Controllers;

use App\Devotional;
use App\Events;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function devotionalDays($day){
        $devotional = Devotional::where('date', $day)->first();
        return view('devotional', ['data' => $devotional]);
    }

    public function singleEvent($title){
        $title = str_replace('-', ' ', $title);
        $event = Events::where('name', $title)->first();
        return view('event', ['data' => $event]);
    }
    //

}
