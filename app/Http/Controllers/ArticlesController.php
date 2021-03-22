<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\StoreItemRequest;

class ArticlesController extends Controller
{   
    public function __construct()
    {
        $this->middleware('admin')->except(['indexUser','showUser']);
    }

    public function indexUser()
    {
        $articles = Article::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(9);
            
        return view('user.modules.items', [
            'items' => $articles,
            'name' => 'Маколалар',
            'table' => 'articles',
            'label'=>false
        ]);
    }

    public function showUser(Article $article){
        return view('user.modules.view', [
            'item'=>$article,
            'label'=>false
        ]);
    }

    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('admin.articles', compact('articles'));
    }

    public function create()
    {
        return view('admin.modules.add', ['name' => 'статью', 'table' => 'articles']);
    }

    public function store(StoreItemRequest $request)
    {
        Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $request->file('img')->store('/'),
            'status' => $request->status ? true : false
        ]);
        return back()->with('success', 'Статья добавлена!');
    }

    public function show(Article $article)
    {
        return view('admin.modules.view', [
            'item' => $article,
            'name' => 'Статья'
        ]);
    }

    public function edit(Article $article)
    {
        return view('admin.modules.edit', [
            'name' => 'статью',
            'table' => 'articles',
            'item' => $article
        ]);
    }


    public function update(Article $article, Request $request)
    {
        $img = $request->file('img');
        $path = $article->image;

        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $img ? $img->store('/') : $path,
            'status' => $request->status ? true : false
        ]);

        return back()->with('success', 'Статья изменен!');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return back();
    }

    public function destroySelected(Request $request)
    {
        $this->deleteSelected(Article::class, $request);
        return back()->with('success', 'Отмеченные удалены!');;
    }
}
