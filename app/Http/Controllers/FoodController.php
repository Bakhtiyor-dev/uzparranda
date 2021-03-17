<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index(){
    	return view('user.food');
    }

    public function indexAdmin(){
    	$food=Food::all();
        return view('admin.food',compact('food'));
    }

}
