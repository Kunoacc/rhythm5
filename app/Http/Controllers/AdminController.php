<?php

namespace App\Http\Controllers;

use App\Devotional;
use App\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('login');
    }

    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
            try {
                auth()->attempt(['email' => $email, 'password' => $password]);
                return redirect()->route('adminHome');
            } catch (Exception $exception) {
                return "error";
            }
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

    public function removeDevotional(Request $request){
        $id = $request->input('id');
        $delete_candidate = Devotional::find($id);
        $delete_candidate->delete();
        return 'success';
    }

    public function createEvent(Request $request){
        $event = new Events();
        $event->name = $request->input('title');
        $event->description = $request->input('description');
        $event->start_date = date('Y-m-d H:i:s', strtotime($request->input('start_date')));
        $event->end_date = ($request->input('end_date')) ? date('Y-m-d H:i:s', strtotime($request->input('end_date'))) : null;
        $event->venue = $request->input('venue');
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $dir = '/';
            $recursive = false;
            $contents = collect(Storage::cloud()->listContents($dir, $recursive));
            $file = $contents
                ->where('type', '=', 'file')
                ->where('filename', '=', pathinfo($name, PATHINFO_FILENAME))
                ->where('extension', '=', pathinfo($name, PATHINFO_EXTENSION))
                ->first();
            $event->image_path = $file['path'];
        }
        $event->type = $request->input('type');
        $event->save();
        return redirect()->back()->with(['type' => 'success', 'message' => 'event added successfully']);
    }

    public function editEvent(Request $request, $id){
        $event = Events::find($id);
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->venue = $request->input('venue');
        $event->type = $request->input('type');
        $event->save();
        return array('type' => 'success', 'message' => 'event edited successfully');
    }

    public function deleteEvent(Request $request){
        $event = Events::find($request->input('id'));
        Storage::cloud()->delete($event->image_path);
        Events::destroy($request->input('id'));

        return array('type' => 'success', 'message' => 'event deleted successfully');
    }
    //
}
