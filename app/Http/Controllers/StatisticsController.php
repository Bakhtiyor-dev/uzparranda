<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;
use App\Models\Rate;

class StatisticsController extends Controller
{	
	public function __construct()
    {
        $this->middleware('admin');
    }
	protected $months=['January','February','March','April','May','June','July','August','September','October','November','December'];

    public function visit(){   		
    	$response=[];
    	foreach ($this->months as $month) {
    		if($data=Visit::where('month',$month)->first())
                $response[]=$data->count;		
    		else
    			$response[]=0;
    	}
    	return $response;
   }
   
   public function rating(){
	   $likes=Rate::where('value','yes')->count();
	   $dislikes=Rate::where('value','no')->count();

	   return [$likes,$dislikes];
   }
}
