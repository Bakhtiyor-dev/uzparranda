<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
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
}
