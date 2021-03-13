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
Route::view('/contact','user.contact');
Route::get('/news','NewsController@index');
Route::get('/view/{new}','NewsController@show');
Route::view('/view','user.view');
Route::post('/feedback','FeedbackController@store');

//Admin routes
Route::view('/admin','admin.index')->name('admin');
Route::get('/admin/feedback','FeedbackController@index')->name('feedback');
Route::delete('/admin/feedback','FeedbackController@destroy');
Route::get('/admin/news','NewsController@indexAdmin')->name('news');
Route::view('/admin/news/add','admin.add');
Route::post('/admin/news/add','NewsController@store');

