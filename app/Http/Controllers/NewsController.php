<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;


class NewsController extends Controller
{
    public function indexUser(){
    	$news=News::where('status',1)
                    ->orderBy('created_at','desc')
                    ->paginate(9);
    	return view('user.news',compact('news'));
    }

    public function indexAdmin(){
        $news=News::all();
        return view('admin.news',compact('news'));
    }

    public function showUser(News $new){
        return view('user.view',compact('new'));
    }
    public function showAdmin(News $new){
        return view('admin.modules.view',[
            'item'=>$new,
            'name'=>'Новость'
            ]);
    }

    public function add(){
        return view('admin.modules.add',['name'=>'новость','table'=>'news']);
    }

    public function store(StoreItemRequest $request){
        News::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>'/storage/'.$request->file('img')->store('/'),
            'status'=>$request->status?true:false
        ]); 
        return back()->with('success','Новость добавленa!');
    }

    public function edit(News $new){
        return view('admin.modules.edit',[
            'name'=>'новость',
            'table'=>'news',
            'item'=>$new
        ]);
    }

    public function update(News $new,Request $request){
        $img=$request->file('img');
        $path=$new->image;

        $new->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$img ? $img->store() : $path,
            'status'=>$request->status?true:false
        ]);
        return back()->with('success','Новость изменено!');
    }

    public function destroy(News $new){
        $new->delete();
        return back();  
    }
    
}
