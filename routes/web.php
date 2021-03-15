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
Route::get('/','IndexController@lastNews');
Route::view('/contact','user.contact');
Route::get('/news','NewsController@index');
Route::get('/view/{new}','NewsController@show');
Route::get('/pages/{page}','PagesController@render');

//User pages
Route::view('/view','user.view');
Route::post('/feedback','FeedbackController@store');
Route::get('/events','EventsController@index');
Route::get('/articles','ArticlesController@index');

//Admin routes
Route::view('/admin','admin.index')->name('admin');
Route::get('/admin/feedback','FeedbackController@index')->name('feedback');
Route::delete('/admin/feedback','FeedbackController@destroy');
Route::get('/admin/news','NewsController@indexAdmin')->name('news');
Route::view('/admin/news/add','admin.add');
Route::post('/admin/news/add','NewsController@store');

//Api for visitors count
Route::get('/getVistorsCount', 'VisitCounterController@respond');
?>
