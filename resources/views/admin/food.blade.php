@extends('admin.layouts.main')
@section('content')
	@include('admin.modules.table',[
		'name'=>'Кормы',
		'table'=>'food',
		'collection'=>$food
	])
@endsection