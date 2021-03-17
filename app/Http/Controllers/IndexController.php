<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Page;
use App\Models\Product;

class IndexController extends Controller
{
    public function index(){
    	$about=Page::where('name','about')->first();
    	$lastNews=News::where('status',1)
    					->orderBy('created_at','desc')
    					->take(3)
    					->get();
		$products=Product::all();
    	return view('user.index',
    	[
    		'lastNews'=>$lastNews,
    		'about'=>$about,
			'products'=>$products
    	]);
    }
}
