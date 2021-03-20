<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\StoreItemRequest;
class EventsController extends Controller
{
    public function index(){
    	$events=Event::all();
    	return view('user.events',compact('events'));
    }
    public function indexAdmin(){
    	$events=Event::all();
    	return view('admin.events',compact('events'));
    }

    public function show(Event $event){
        return view('admin.modules.view',[
            'item'=>$event,
            'name'=>'Событие'
            ]);
    }

    public function add(){
        return view('admin.modules.add',['name'=>'событие','table'=>'events']);
    }
    public function store(StoreItemRequest $request){
        Event::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$request->file('img')->store('/img/events'),
            'status'=>$request->status?true:false
        ]); 
        return back()->with('success','Событие добавлен!');
    }

    public function edit(Event $event){
        return view('admin.modules.edit',[
            'name'=>'событие',
            'table'=>'events',
            'item'=>$event
        ]);
    }

    public function update(Event $event,Request $request){
        $img=$request->file('img');
        $path=$event->image;

        $event->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$img ? $img->store('/img/events') : $path,
            'status'=>$request->status?true:false
        ]);
        
        return back()->with('success','Событие изменено!');
    }


    public function destroy(Event $event){
        $event->delete();
        return back();  
    }

}

