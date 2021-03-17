@extends('user.layouts.main',['class'=>''])

@section('content')
	
	@isset($about)
		@include('user.partials.about',['data'=>$about])
	@endisset
	
	@include('user.partials.news')
	@include('user.partials.gal_slider')
	@include('user.partials.info_box')
	@include('user.partials.clients')
	@include('user.partials.links')
@endsection

@section('slider')
	@include('user.partials.slider')
@endsection