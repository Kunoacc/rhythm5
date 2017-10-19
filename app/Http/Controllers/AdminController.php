<?php

namespace App\Http\Controllers;

use App\Devotional;
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

    public function addDevotional(Request $request){
        $new_devotional = new Devotional();
        $new_devotional->title = $request->input('title');
        $new_devotional->reading = $request->input('reading');
        $new_devotional->content = $request->input('content');
        $new_devotional->bible_verse = $request->input('verse');
        $date = strtotime($request->input('date'));
        $date = date('Y-m-d', $date);
        $new_devotional->date = $date;
        $new_devotional->author = $request->input('author');
        $new_devotional->save();
        return 'success';

    }

    public function deleteDevotional(Request $request){
        $id = $request->input('id');
        $delete_candidate = Devotional::find($id);
        $delete_candidate->delete();
        return 'success';
    }
    //
}
