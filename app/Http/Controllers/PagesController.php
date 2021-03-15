<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
class PagesController extends Controller
{
	public function render(Page $page){
		return view('user.pages.'.$page->name,['page'=>$page]);
	}
}
