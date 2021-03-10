@extends('layouts.main',['class'=>''])

@section('content')
	@include('partials.about')
	@include('partials.news')
	@include('partials.gal_slider')
	@include('partials.info_box')
	@include('partials.clients')
	@include('partials.links')
@endsection

@section('slider')
	@include('partials.slider')
@endsection