<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;

class VisitCounterController extends Controller
{
	protected $months=['January','February','March','April','May','June','July','August','September','October','November','December'];

    public function respond(){   		
    	$response=[];
    	foreach ($this->months as $month) {
    		if($data=Visit::where('month',$month)->first())
    			$response[]=$data->count;		
    		else
    			$response[]=0;
    	}
    	return $response;
   }
}
