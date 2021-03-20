@extends('admin.layouts.main')
@section('content')
<h2>{{$name}}</h2>
<div class="container d-flex text-dark">
    <img src="{{$item->image}}" alt="image">
    <div class="p-2">
        <h2 class="text-center">{{$item->title}}</h2>
        {!!$item->body!!}
        @if($item->status)
            <p>Статус: Показывается пользователям.</p>
        @else
            <p>Статус: Не показывается пользователям.</p>
        @endif    
    </div>
</div>    

@endsection