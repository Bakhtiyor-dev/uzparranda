<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/view', function () {
    return view('view');
});


Route::get('/admin', function () {
    return view('admin');
});
Route::post('/feedback','FeedbackController@store');