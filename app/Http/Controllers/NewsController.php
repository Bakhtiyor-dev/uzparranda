<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    public function index(){
    	$news=News::where('status',1)
                    ->orderBy('created_at','desc')
                    ->get();
    	return view('user.news',compact('news'));
    }

    public function indexAdmin(){
        $news=News::all();
        return view('admin.news',compact('news'));
    }

    public function show(News $new){
        if($new->status==1)
            return view('user.view',['new'=>$new]);
        abort(404);
    }

    public function store(Request $request){
        $this->validation($request);
      
        $new=News::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$request->file('img')->store('/img/news'),
            'status'=>$request->status?true:false
        ]);

    	return back()->with('success','Новость добавлена!');
    }

    public function validation($request){
        
        $this->validate($request,
            [
                'title'=>'required|max:255',
                'body'=>'required',
            ]
        );
    }
}
