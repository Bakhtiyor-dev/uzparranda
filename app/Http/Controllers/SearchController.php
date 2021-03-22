<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Models\Article;
use App\Models\Event;
use App\Models\Food;
use App\Models\News;
use App\Models\Page;
use App\Models\Product;
use App\Models\Feedback;


class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('searchUser');
    }
    
    public function searchUser(Request $request)
    {
        $request->validate(['search'=>'required']);
        $searchResults = (new Search())
            ->registerModel(News::class, 'title','body')
            ->registerModel(Article::class, 'title','body')
            ->registerModel(Event::class, 'title','body')
            ->registerModel(Product::class, 'title','body')
            ->registerModel(Food::class, 'title','body')
            ->registerModel(Page::class, 'name','body')
            ->search($request->search);

            return view('user.modules.search',[
                'searchResults'=>$searchResults,
                'search'=>$request->search
            ]);
    }

    public function searchAdmin(Request $request){
        $request->validate(['search'=>'required']);
        
        $searchResults = (new Search())
        ->registerModel(News::class, 'title','body')
        ->registerModel(Article::class, 'title','body')
        ->registerModel(Event::class, 'title','body')
        ->registerModel(Product::class, 'title','body')
        ->registerModel(Food::class, 'title','body')
        ->registerModel(Page::class, 'name','body')
        ->registerModel(Feedback::class,['name','email','phone_number','org_name','body'])
        ->search($request->search);
        

        return view('admin.modules.search',[
            'searchResults'=>$searchResults,
            'search'=>$request->search
        ]);
    }
}
