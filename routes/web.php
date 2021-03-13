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

//User routes
Route::get('/','IndexController@lastNews');
Route::get('/contact', function () {
    return view('user.contact');
});
Route::get('/news','NewsController@index');
Route::get('/view/{new}','NewsController@show');
Route::get('/view', function () {
    return view('user.view');
});
Route::post('/feedback','FeedbackController@store');


//Admin routes
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/feedback','FeedbackController@index');
Route::delete('/admin/feedback','FeedbackController@destroy');

Route::get('/admin/news','NewsController@index');
Route::get('/admin/news/add',function(){
	return view('admin.add');
});
Route::post('/admin/news/add','NewsController@store');