<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
class PagesController extends Controller
{
	public function renderUser(Page $page){
		return view('user.pages.'.$page->name,['page'=>$page]);
	}

	public function renderAdmin(Page $page){
		return view('admin.pages.'.$page->name,['page'=>$page]);
	}
}
