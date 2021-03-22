<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\StoreItemRequest;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['indexUser','showUser']);
    }
    
    public function indexUser()
    {
        $events = Event::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(9);;
        return view('user.modules.items', [
            'items'=>$events,
            'name'=>'Вокеалар',
            'table'=>'events',
            'label'=>true
        ]);
    }

    public function showUser(Event $event){
        return view('user.modules.view', [
            'item'=>$event,
            'label'=>true
        ]);
    }

    public function index()
    {
        $events = Event::orderBy('created_at', 'desc')->get();
        return view('admin.events', compact('events'));
    }

    public function create()
    {
        return view('admin.modules.add', ['name' => 'событие', 'table' => 'events']);
    }

    public function store(StoreItemRequest $request)
    {

        $this->createItem(Event::class, $request);

        return back()->with('success', 'Событие добавлен!');
    }

    public function show(Event $event)
    {
        return view('admin.modules.view', [
            'item' => $event,
            'name' => 'Событие'
        ]);
    }

    public function edit(Event $event)
    {
        return view('admin.modules.edit', [
            'name' => 'событие',
            'table' => 'events',
            'item' => $event
        ]);
    }

    public function update(Event $event, Request $request)
    {

        $this->updateItem($event, $request);

        return back()->with('success', 'Событие изменено!');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return back();
    }

    public function destroySelected(Request $request)
    {
        $this->deleteSelected(Event::class, $request);
        return back()->with('success', 'Отмеченные удалены!');;
    }
}
