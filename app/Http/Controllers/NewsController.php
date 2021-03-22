<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;


class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['indexUser','showUser']);
    }
    
    public function indexUser()
    {
        $news = News::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(9);
        return view('user.modules.items', [
            'items' => $news,
            'name' => 'Янгиликлар',
            'table' => 'news',
            'label'=>true
        ]);
    }

    public function showUser(News $new)
    {
        return view('user.modules.view', [
            'item'=>$new,
            'label'=>true
        ]);
    }

    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return view('admin.news', compact('news'));
    }

    public function show(News $new)
    {
        return view('admin.modules.view', [
            'item' => $new,
            'name' => 'Новость'
        ]);
    }

    public function create()
    {
        return view('admin.modules.add', ['name' => 'новость', 'table' => 'news']);
    }

    public function store(StoreItemRequest $request)
    {
        $this->createItem(News::class, $request);
        return back()->with('success', 'Новость добавленa!');
    }

    public function edit(News $new)
    {
        return view('admin.modules.edit', [
            'name' => 'новость',
            'table' => 'news',
            'item' => $new
        ]);
    }

    public function update(News $new, Request $request)
    {
        $this->updateItem($new, $request);
        return back()->with('success', 'Новость изменено!');
    }

    public function destroy(News $new)
    {
        $new->delete();
        return back();
    }
    public function destroySelected(Request $request)
    {
        $this->deleteSelected(News::class, $request);
        return back()->with('success', 'Отмеченные удалены!');;
    }
}
