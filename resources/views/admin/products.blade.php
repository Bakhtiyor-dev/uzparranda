@extends('admin.layouts.main')
@section('content')
	@include('admin.modules.table',[
		'name'=>'Продукты',
		'table'=>'products',
		'collection'=>$products
	])
@endsection