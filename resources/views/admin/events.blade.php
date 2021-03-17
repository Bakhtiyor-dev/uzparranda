@extends('admin.layouts.main')
@section('content')
	@include('admin.modules.table',[
		'name'=>'Cобытия',
		'table'=>'events',
		'collection'=>$events
	])
@endsection