@extends('admin.layouts.main')
@section('content')
	@include('admin.modules.table',[
		'name'=>'Новости',
		'table'=>'news',
		'collection'=>$news
	])
@endsection