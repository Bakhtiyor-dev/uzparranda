@extends('user.layouts.main',['class'=>'no-index'])
@section('content')
     
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h2>
                        Найдено {{$searchResults->count()}} результатов для: <span class="text-navy">{{$search}}</span>
                    </h2>
                   
        
                    <div class="search-form">
                        <form action="/search" method="post">
                            <div class="input-group">
                                @csrf
                                <input type="text" placeholder="{{$search}}" name="search" class="form-control input-lg">
                                <div class="input-group-btn">
                                    <button class="btn btn-lg btn-primary" type="submit">
                                        Поиск
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                
                @foreach($searchResults as $res)
                    @php $model=$res->searchable @endphp
                    <div class="search-result">
                        <h3><a href="{{$model->userPath()}}">{{$model->title}}</a></h3>
                        <a href="{{$model->userPath()}}" class="search-link">{{$model->userPath()}}</a>
                        <p>
                            {{$model->body}}
                        </p>
                    </div>
                    <hr>
                    
                @endforeach 
                    
                  
                    
                    <div class="text-center">
                        <div class="btn-group">
                            <button class="btn btn-white" type="button"><i class="glyphicon glyphicon-chevron-left"></i></button>
                            <button class="btn btn-white">1</button>
                            <button class="btn btn-white  active">2</button>
                            <button class="btn btn-white">3</button>
                            <button class="btn btn-white">4</button>
                            <button class="btn btn-white">5</button>
                            <button class="btn btn-white">6</button>
                            <button class="btn btn-white">7</button>
                            <button class="btn btn-white" type="button"><i class="glyphicon glyphicon-chevron-right"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    
{{-- <div class="container">
    
<h1>Поиск:</h1>

    Найдено {{ $searchResults->count() }} результатов.

    @foreach($searchResults->groupByType() as $type => $modelSearchResults)
    <h2>{{ $type }}</h2>
    
    @foreach($modelSearchResults as $searchResult)
        <ul>
            <li><a href="{{$searchResult->searchable->userPath()}}">{{ $searchResult->title }}</a></li>
        </ul>
    @endforeach
    @endforeach
</div> --}}
@endsection