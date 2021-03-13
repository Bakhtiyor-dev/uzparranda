@extends('user.layouts.main',['class'=>''])

@section('content')
	@include('user.partials.about')
	@include('user.partials.news')
	@include('user.partials.gal_slider')
	@include('user.partials.info_box')
	@include('user.partials.clients')
	@include('user.partials.links')
@endsection

@section('slider')
	@include('user.partials.slider')
@endsection