@extends('admin.layouts.main')
@section('content')
	@include('admin.modules.table',[
		'name'=>'Cтатьи',
		'table'=>'articles',
		'collection'=>$articles
	])
@endsection