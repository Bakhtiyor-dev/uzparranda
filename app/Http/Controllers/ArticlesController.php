<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function indexUser(){
    	$articles=Article::all();
    	return view('user.article',compact('articles'));
    }

    public function indexAdmin(){
    	$articles=Article::all();
    	return view('admin.articles',compact('articles'));
    }
}
