<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Page;

class IndexController extends Controller
{
    public function lastNews(){
    	$about=Page::where('name','about')->firstOrFail();
    	
    	$lastNews=News::where('status',1)
    					->orderBy('created_at','desc')
    					->take(3)
    					->get();
    	
    	return view('user.index',
    	[
    		'lastNews'=>$lastNews,
    		'about'=>$about
    	]);
    }
}
