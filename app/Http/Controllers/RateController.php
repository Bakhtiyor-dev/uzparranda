<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;

class RateController extends Controller
{
    public function store(Request $request){
        Rate::create([
            'value'=>$request->rate
        ]);
        return back();
    }
}
