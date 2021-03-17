<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
    public function index(){
    	return view('user.products');
    }
    public function indexAdmin(){
    	$products=Product::all();
    	return view('admin.products',compact('products'));
    }

    public function add(){
        return view('admin.modules.add',['name'=>'продукт','table'=>'products']);
    }

    public function store(Request $request){
        Product::create([
            'title'=>$request->
        ]);
    }
}
