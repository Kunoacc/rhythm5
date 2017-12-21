<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
Route::view('/donate', 'donate')->name('donation');
Route::get('/donate/success', function (\Illuminate\Http\Request $request) {
    $paystack = new \Yabacon\Paystack("sk_test_4a6e12ea908c14ffdc61e8417ab32fab9ba54060");
    $response = $paystack->transaction->verify(["reference" => $request->input('reference')]);
    if ($response->data->status === "success"){
        $data = $response->data;
        $customer = $data->customer;
        $donation = new \App\Donations();
        $donation->reference = $data->reference;
        $donation->amount = $data->amount;
        $donation->name = $customer->first_name . " " . $customer->last_name;
        $donation->email = $customer->email;
        $donation->save();
        return redirect()->route('index');
    }
});
Route::view('/devotional', 'devotionals')->name('devotional');
Route::get('/devotional/{day}', 'PagesController@devotionalDays')->name('devotionalDays');
Route::post('/logout', 'AdminController@logout')->name('logout')->middleware('auth');

Route::group(['prefix' => 'admin'], function (){
    Route::group(['middleware' => 'guest'], function (){
        Route::view('/login', 'admin.auth.login')->name('adminLogin');
        Route::post('/login', 'AdminController@login')->name('login');
    });
    Route::group(['middleware' => 'auth'], function (){
        Route::view('/home', 'admin.index')->name('adminHome');
        Route::view('/blog', 'admin.blog')->name('adminBlog');
        Route::view('/devotional', 'admin.devotional')->name('adminDevotional');
        Route::view('/donations', 'admin.donations')->name('adminDonations');
        Route::view('/events', 'admin.events')->name('adminEvents');
        Route::view('/settings', 'admin.settings')->name('adminSettings');
        Route::post('/devotional/add', 'AdminController@addDevotional')->name('addDevotional');
        Route::post('/devotional/remove', 'AdminController@removeDevotional')->name('removeDevotional');
    });
});