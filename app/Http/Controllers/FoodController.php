<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Http\Requests\StoreItemRequest;

class FoodController extends Controller
{
    public function index(){
    	return view('user.food');
    }

    public function indexAdmin(){
    	$food=Food::all();
        return view('admin.food',compact('food'));
    }
    
    public function show(Food $food){
        return view('admin.modules.view',[
            'item'=>$food,
            'name'=>'Корм'
            ]);
    }

    public function add(){
        return view('admin.modules.add',['name'=>'корм','table'=>'food']);
    }

    public function store(StoreItemRequest $request){
        Food::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$request->file('img')->store('/img/food'),
            'status'=>$request->status?true:false
        ]); 
        return back()->with('success','Корм добавлен!');
    }

    public function edit(Food $food){
        return view('admin.modules.edit',[
            'name'=>'корм',
            'table'=>'food',
            'item'=>$food
        ]);
    }

    public function update(Food $food,Request $request){
        $img=$request->file('img');
        $path=$food->image;

        $food->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$img ? $img->store('/img/food') : $path,
            'status'=>$request->status?true:false
        ]);
        return back()->with('success','Корм изменен!');
    }
   
    public function destroy(Food $food){
        $food->delete();
        return back();  
    }
}
