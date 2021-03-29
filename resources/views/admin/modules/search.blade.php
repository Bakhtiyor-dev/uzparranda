@extends('admin.layouts.main')
@section('content')
<div class="container bootstrap snippets bootdey">
    <div class="row content">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h2>
                        Найдено {{$count}}  результатов для: <span class="text-navy">{{$search}}</span>
                    </h2>        
                    <div class="search-form">
                        <form action="/admin/search" method="post">
                            <div class="input-group">
                                @csrf
                                <input type="text" placeholder="{{$search}}" name="search" class="form-control " required> 
                                <div class="input-group-btn">
                                    <button class="btn btn-primary ml-2" type="submit">
                                        Поиск
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div id="paginate">
                        <hr>
                    @foreach ($searchResults as $type=>$items)
                    <h3>{{$type}}</h3>
                        @foreach($items as $model)
                            <div class="search-result">
                                <h3><a href="{{$model->adminPath()}}">{{$model->title}}</a></h3>
                                <a href="{{$model->adminPath()}}" class="search-link">{{'http://bird.uz'.$model->adminPath()}}</a>
                                <p>
                                    {{Str::limit($model->body,200,'...')}}
                                </p>
                            </div>
                        <hr>
                        @endforeach
                    @endforeach
                           
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customStyles')
<link rel="stylesheet" href="/css/jquery.paginate.css">
@endsection

@section('scripts')
    <script src="/js/jquery.paginate.js"></script>
    <script>
        $('#paginate').paginate({
            perPage:10,      
            autoScroll:true, 
        }       
    );
    </script>
    @if($count==0)
        <script>
            $('.paginate-pagination').hide();
        </script>
    @endif
@endsection