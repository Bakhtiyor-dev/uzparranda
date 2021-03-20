<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\StoreItemRequest;

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

    public function show(Article $article){
        return view('admin.modules.view',[
            'item'=>$article,
            'name'=>'Статья'
            ]);
    }

    public function add(){
        return view('admin.modules.add',['name'=>'статью','table'=>'articles']);
    }

    public function store(StoreItemRequest $request){
        Article::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$request->file('img')->store('/img/articles'),
            'status'=>$request->status?true:false
        ]); 
        return back()->with('success','Статья добавлена!');
    }

    public function edit(Article $article){
        return view('admin.modules.edit',[
            'name'=>'статью',
            'table'=>'articles',
            'item'=>$article
        ]);
    }

    public function update(Article $article,Request $request){
        $img=$request->file('img');
        $path=$article->image;

        $article->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$img ? $img->store('/img/articles') : $path,
            'status'=>$request->status?true:false
        ]);
        
        return back()->with('success','Статья изменен!');
    }

    public function destroy(Article $article){
        $article->delete();
        return back();  
    }
}
