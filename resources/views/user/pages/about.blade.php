@extends('user.layouts.main',['class'=>'no-index'])
@section('content')
	@include('user.partials.about',['data'=>$page])
@endsection