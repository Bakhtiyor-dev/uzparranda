<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
    public function toggle(Request $request)
    {   if($request->checked=='true')
            $status=1;
        else
            $status=0;    
        DB::table($request->table)->where('id',$request->id)
                                ->update(['status'=>$status]);
        return response(200);
    }
}