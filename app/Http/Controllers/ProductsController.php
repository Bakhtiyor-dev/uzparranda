<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreItemRequest;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except(['indexUser','showUser']);
    }
    
    public function indexUser()
    {
        $products = Product::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(9);;
        
        return view('user.modules.items', [
            'items' => $products,
            'name' => 'Махсулотлар',
            'table' => 'products',
            'label'=>false
        ]);
    }

    public function showUser(Product $product){
        return view('user.modules.view', [
            'item'=>$product,
            'label'=>true
        ]);
    }

    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('admin.products', compact('products'));
    }

    public function show(Product $product)
    {
        return view('admin.modules.view', [
            'item' => $product,
            'name' => 'Продукт'
        ]);
    }
    public function create()
    {
        return view('admin.modules.add', ['name' => 'продукт', 'table' => 'products']);
    }
    public function store(StoreItemRequest $request)
    {
        $this->createItem(Product::class, $request);
        return back()->with('success', 'Продукт добавлен!');
    }

    public function edit(Product $product)
    {
        return view('admin.modules.edit', [
            'name' => 'продукт',
            'table' => 'products',
            'item' => $product
        ]);
    }

    public function update(Product $product, Request $request)
    {
        $this->updateItem($product, $request);
        return back()->with('success', 'Продукт изменен!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }

    public function destroySelected(Request $request)
    {
        $this->deleteSelected(Product::class, $request);
        return back()->with('success', 'Отмеченные удалены!');;
    }
}
