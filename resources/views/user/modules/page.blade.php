@extends('user.layouts.main',['class'=>'no-index'])
@section('content')
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="title">{{$title}}</h3>
                    <hr class="bold">
                </div>
                <div class="col-md-6">
                    {!!$page->body!!} 
                </div>
                @if($page->name=='about')
                    <div class="col-md-3">
                        <h4>Файзиев Мансур</h4>
                        <div class="lvl">Директор </div>
                        <hr class="bold">
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
