<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use App\Models\Article;
use App\Models\Event;
use App\Models\Food;
use App\Models\News;
use App\Models\Page;
use App\Models\Product;
use App\Models\Feedback;


class SearchController extends Controller
{
    public $models=[
        Article::class,
        Event::class,
        Food::class,
        News::class,
        Product::class,
    ];

    public function __construct()
    {
        $this->middleware('admin')->except('searchUser');
    }
    
    public function searchUser(Request $request)
    {   
        $request->validate(['search'=>'required']);
        $res=[];
        foreach($this->models as $model){
            $result=Search::searchInModel($model,['title','body'],$request->search);
            if(!$result->isEmpty())
                $res[$model::$searchableType]=$result;
        }
        $pages=Search::searchInModel(Page::class,['body','created_at'],$request->search);
            if(!$pages->isEmpty())
                $res['Cтраницы']=$pages;
        
        $count=0;
        foreach($res as $r){
            $count+=count($r);
        }

        return view('user.modules.search',[
            'searchResults'=>$res,
            'search'=>$request->search,
            'count'=>$count
        ]);
     
    }

    public function searchAdmin(Request $request){
        $request->validate(['search'=>'required']);
        $res=[];
        foreach($this->models as $model){
            $result=Search::searchInModel($model,['title','body'],$request->search);
            if(!$result->isEmpty())
                $res[$model::$searchableType]=$result;
        }

        $pages=Search::searchInModel(Page::class,['body','created_at'],$request->search);
        if(!$pages->isEmpty())
            $res['Cтраницы']=$pages;

        $feedback=Feedback::where('name','LIKE','%'.$request->search.'%')
                            ->orWhere('email','LIKE','%'.$request->search.'%')
                            ->orWhere('phone_number','LIKE','%'.$request->search.'%')
                            ->orWhere('org_name','LIKE','%'.$request->search.'%')
                            ->orWhere('body','LIKE','%'.$request->search.'%')
                            ->get();
        if(!$feedback->isEmpty())
            $res['Сообщения']=$feedback;
        $count=0;
        foreach($res as $r){
            $count+=count($r);
        }
        
        return view('admin.modules.search',[
            'searchResults'=>$res,
            'search'=>$request->search,
            'count'=>$count
        ]);
    }
}
