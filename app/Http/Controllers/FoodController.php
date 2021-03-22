<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Http\Requests\StoreItemRequest;

class FoodController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except(['indexUser','showUser']);
    }
    
    public function indexUser()
    {
        $food = Food::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(9);;
        
            return view('user.modules.items', [
            'items' =>$food,
            'name' => 'Озукалар',
            'table' => 'food',
            'label'=>false
        ]);
    }

    public function showUser(Food $food){
        return view('user.modules.view', [
            'item'=>$food,
            'label'=>false
        ]);
    }

    public function index()
    {
        $food = Food::orderBy('created_at', 'desc')->get();
        return view('admin.food', compact('food'));
    }

    public function show(Food $food)
    {
        return view('admin.modules.view', [
            'item' => $food,
            'name' => 'Корм'
        ]);
    }

    public function create()
    {
        return view('admin.modules.add', ['name' => 'корм', 'table' => 'food']);
    }

    public function store(StoreItemRequest $request)
    {

        $this->createItem(Food::class, $request);

        return back()->with('success', 'Корм добавлен!');
    }

    public function edit(Food $food)
    {
        return view('admin.modules.edit', [
            'name' => 'корм',
            'table' => 'food',
            'item' => $food
        ]);
    }

    public function update(Food $food, Request $request)
    {

        $this->updateItem($food, $request);

        return back()->with('success', 'Корм изменен!');
    }

    public function destroy(Food $food)
    {
        $food->delete();
        return back();
    }

    public function destroySelected(Request $request)
    {
        $this->deleteSelected(Food::class, $request);
        return back()->with('success', 'Отмеченные удалены!');;
    }
}
