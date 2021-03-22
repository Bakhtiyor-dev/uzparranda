<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{	
    public function __construct()
    {
        $this->middleware('admin')->except('store');
    }
    
    public function index(){
        Feedback::where('read',0)->update(['read'=>1]);
        $messages=Feedback::orderBy('created_at','desc')->paginate(8);
            
        return view('admin.feedback',compact('messages'));
    }
    
    public function store(Request $request){
    	//Validation
    	$this->validate($request,
        [
    		'name'=>'required|max:50',
    		'email'=>'required|email',
    		'phone'=>'required',
    		'org_name'=>'required',
    		'body'=>'required'
    	]);
        //Saving message
        Feedback::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone,
            'org_name'=>$request->org_name,
            'body'=>$request->body,
        ]);

    	return back()->with('success','true');
    	
    }

    //Delete selected messages
    public function destroy(Request $request){
        $ids=explode(',',$request->feedbacks);
        Feedback::whereIn('id',$ids)->delete();
        return back()->with('success','Отмеченные удалены!');;
    }

}
