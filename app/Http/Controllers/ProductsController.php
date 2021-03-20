<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreItemRequest;
class ProductsController extends Controller
{
    public function index(){
    	return view('user.products');
    }
    public function indexAdmin(){
    	$products=Product::all();
    	return view('admin.products',compact('products'));
    }

    public function show(Product $product){
        return view('admin.modules.view',[
            'item'=>$product,
            'name'=>'Продукт'
            ]);
    }

    public function add(){
        return view('admin.modules.add',['name'=>'продукт','table'=>'products']);
    }
    public function store(StoreItemRequest $request){
        Product::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$request->file('img')->store('/img/products'),
            'status'=>$request->status?true:false
        ]); 
        return back()->with('success','Продукт добавлен!');
    }

    public function edit(Product $product){
        return view('admin.modules.edit',[
            'name'=>'продукт',
            'table'=>'products',
            'item'=>$product
        ]);
    }

    public function update(Product $product,Request $request){
        $img=$request->file('img');
        $path=$product->image;

        $product->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$img ? $img->store('/img/products') : $path,
            'status'=>$request->status?true:false
        ]);
        
        return back()->with('success','Продукт изменен!');
    }

    public function destroy(Product $product){
        $product->delete();
        return back();  
    }
}





