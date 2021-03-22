<?php

use Illuminate\Support\Facades\Route;
use App\VisitAnalytics;

//Count visitor
session_start();
VisitAnalytics::registerVisitor();

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

Route::get('/', 'IndexController@index');

Route::post('/search', 'SearchController@searchUser');
Route::post('/feedback', 'FeedbackController@store');

Route::get('/pages/{page}', 'PagesController@renderUser');

Route::get('/news', 'NewsController@indexUser');
Route::get('/news/view/{new}', 'NewsController@showUser');
    
Route::get('/events', 'EventsController@indexUser');
Route::get('/events/view/{event}', 'EventsController@showUser');

Route::get('/articles', 'ArticlesController@indexUser');
Route::get('/articles/view/{article}', 'ArticlesController@showUser');

Route::get('/products', 'ProductsController@indexUser');
Route::get('/products/view/{product}', 'ProductsController@showUser');

Route::get('/food', 'FoodController@indexUser');
Route::get('/food/view/{food}', 'FoodController@showUser');


Route::view('/admin/login','admin.login')->name('login');
Route::post('/admin/login','Auth\AdminAuthController@login');


Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'admin'], function () {      
        Route::get('/logout','Auth\AdminAuthController@logout');
        Route::view('/', 'admin.index')->name('admin');  
        Route::post('/search', 'SearchController@searchAdmin');
        Route::get('/feedback', 'FeedbackController@index')->name('feedback');
        Route::delete('/feedback', 'FeedbackController@destroy');
        Route::get('/pages/{page}', 'PagesController@renderAdmin')->name('page');
        Route::patch('/pages/{page}', 'PagesController@update');
    
        //CRUD
        Route::resources([
            '/articles' => 'ArticlesController',
            '/events' => 'EventsController',
            '/products'=>'ProductsController',
            '/news'=>'NewsController',
            '/food'=>'FoodController'
        ]);

        //Delete Selected
        Route::delete('/articles','ArticlesController@destroySelected');
        Route::delete('/events','EventsController@destroySelected');
        Route::delete('/products','ProductsController@destroySelected');
        Route::delete('/news','NewsController@destroySelected');
        Route::delete('/food','FoodController@destroySelected');
    });
});


//Api for visitors count
Route::get('/getVistorsCount', 'VisitCounterController@respond');
