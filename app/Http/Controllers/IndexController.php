<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class IndexController extends Controller
{
    public function lastNews(){
    	$lastNews=News::where('status',1)
    					->orderBy('created_at','desc')
    					->take(3)
    					->get();
    	return view('user.index',compact('lastNews'));
    }
}
