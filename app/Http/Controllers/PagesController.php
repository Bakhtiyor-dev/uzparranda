<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
class PagesController extends Controller
{
	protected $pages=[
		'about'=>'Уюшма хакида',
		'inheritance'=>'Наслчилик',
		'law'=>'Конунчилик',
		'zoovet'=>'Ветеринария',
		'services'=>'Хизматлар',
		'activity'=>'Фаолият',
		'rules'=>'Низом'
	];

	public function renderUser(Page $page){
		return view('user.modules.page',[
			'page'=>$page,
			'title'=>$this->pages[$page->name]
		]);
	}

	public function renderAdmin(Page $page){
		return view('admin.pages.'.$page->name,['page'=>$page]);
	}
	
	public function update(Page $page,Request $request){
		
		$request->validate([
			'body'=>'required'
		]);

		$page->update([
			'body'=>$request->body
		]);
		return back()->with('success','Страница изменено!');
	}
}
