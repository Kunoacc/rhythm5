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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/devotional', 'PagesController@devotional')->name('devotional');
Route::get('/devotional/{day}', 'PagesController@devotionalDays')->name('devotionalDays');

Route::group(['prefix' => 'admin'], function (){
    Route::view('/login', 'admin.auth.login')->name('adminLogin')->middleware('guest');
    Route::post('/login', 'AdminController@login')->name('login');
    Route::group(['middleware' => 'auth'], function (){
        Route::view('/home', 'admin.index')->name('adminHome');
        Route::view('/blog', 'admin.blog')->name('adminBlog');
        Route::view('/devotional', 'admin.devotional')->name('adminDevotional');
        Route::view('/donations', 'admin.donations')->name('adminDonations');
        Route::view('/events', 'admin.events')->name('adminEvents');
        Route::view('/settings', 'admin.settings')->name('adminSettings');
    });
});