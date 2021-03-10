<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{	
    public function store(Request $request){
    	
    	$validated=$request->validate([
    		'name'=>'required|max:50',
    		'email'=>'required|email',
    		'phone'=>'required',
    		'org_name'=>'required',
    		'body'=>'required'
    	]);

    	$feedback=new Feedback;
    	$feedback->name=$validated['name'];
    	$feedback->email=$validated['email'];
    	$feedback->phone_number=$validated['phone'];
    	$feedback->org_name=$validated['org_name'];
    	$feedback->body=$validated['body'];
    	$feedback->save();
    	return back()->with('success','true');
    	
    }
}
