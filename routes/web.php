<?php
use Illuminate\Support\Facades\Route;
use App\VisitAnalytics;
use App\Models\Visit;

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
Route::get('/','IndexController@index');
Route::view('/contact','user.contact');
Route::get('/news','NewsController@indexUser');
Route::get('/view/{new}','NewsController@showUser');
Route::get('/pages/{page}','PagesController@renderUser');

//User pages
Route::view('/view','user.view');
Route::post('/feedback','FeedbackController@store');
Route::get('/events','EventsController@index');
Route::get('/articles','ArticlesController@indexUser');

//Admin routes
Route::view('/admin','admin.index')->name('admin');
Route::get('/admin/feedback','FeedbackController@index')->name('feedback');
Route::delete('/admin/feedback','FeedbackController@destroy');
Route::get('/admin/news','NewsController@indexAdmin')->name('news');
Route::view('/admin/website-data','admin.website-data');
Route::get('/admin/products','ProductsController@indexAdmin')->name('products');
Route::get('/admin/food','FoodController@indexAdmin')->name('food');
Route::get('/admin/events','EventsController@indexAdmin')->name('events');
Route::get('/admin/articles','ArticlesController@indexAdmin')->name('articles');

Route::get('/admin/pages/{page}','PagesController@renderAdmin')->name('page');
Route::patch('/admin/pages/{page}','PagesController@update');


//News
Route::get('/admin/news/add','NewsController@add');
Route::post('/admin/news/add','NewsController@store');
Route::get('/admin/news/view/{new}','NewsController@showAdmin');

Route::get('/admin/news/edit/{new}','NewsController@edit');
Route::patch('/admin/news/edit/{new}','NewsController@update');

Route::delete('/admin/news/{new}','NewsController@destroy');

//Products
Route::get('/admin/products/add','ProductsController@add');
Route::post('/admin/products/add','ProductsController@store');
Route::get('/admin/products/view/{product}','ProductsController@show');

Route::get('/admin/products/edit/{product}','ProductsController@edit');
Route::patch('/admin/products/edit/{product}','ProductsController@update');

Route::delete('/admin/products/{product}','ProductsController@destroy');

//Food
Route::get('/admin/food/add','FoodController@add');
Route::post('/admin/food/add','FoodController@store');
Route::get('/admin/food/view/{food}','FoodController@show');

Route::get('/admin/food/edit/{food}','FoodController@edit');
Route::patch('/admin/food/edit/{food}','FoodController@update');

Route::delete('/admin/food/{food}','FoodController@destroy');


//Articles
Route::get('/admin/articles/add','ArticlesController@add');
Route::post('/admin/articles/add','ArticlesController@store');
Route::get('/admin/articles/view/{article}','ArticlesController@show');

Route::get('/admin/articles/edit/{article}','ArticlesController@edit');
Route::patch('/admin/articles/edit/{article}','ArticlesController@update');

Route::delete('/admin/articles/{article}','ArticlesController@destroy');

//Events
Route::get('/admin/events/add','EventsController@add');
Route::post('/admin/events/add','EventsController@store');
Route::get('/admin/events/view/{event}','EventsController@show');

Route::get('/admin/events/edit/{event}','EventsController@edit');
Route::patch('/admin/events/edit/{event}','EventsController@update');

Route::delete('/admin/events/{event}','EventsController@destroy');



//Api for visitors count
Route::get('/getVistorsCount', 'VisitCounterController@respond');