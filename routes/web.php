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
Route::get(/**
 * @param \Illuminate\Http\Request $request
 * @return void
 */
    '/donate/success', function (\Illuminate\Http\Request $request) {
    return dd($request->all());
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