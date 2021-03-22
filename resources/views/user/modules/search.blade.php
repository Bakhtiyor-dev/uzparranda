@extends('user.layouts.main',['class'=>'no-index'])
@section('content')
     
<div class="container bootstrap snippets bootdey">
    <div class="row content">
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
                                <input type="text" placeholder="{{$search}}" name="search" class="form-control input-lg" required> 
                                <div class="input-group-btn">
                                    <button class="btn btn-lg btn-primary" type="submit">
                                        Поиск
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div id="paginate">
                        @foreach($searchResults as $res)
                            @php $model=$res->searchable @endphp
                            <div class="search-result jumbotron">
                                <h3><a href="{{$model->userPath()}}">{{$model->title}}</a></h3>
                                <a href="{{$model->userPath()}}" class="search-link">{{'http://bird.uz/'.$model->userPath()}}</a>
                                <p>
                                    {{Str::limit($model->body,200,'...')}}
                                </p>
                            </div>
                        @endforeach   
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
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
    @if($searchResults->count()==0)
        <script>
            $('.paginate-pagination').hide();
            $('.content').css('margin-bottom','20px');
        </script>
    @endif
@endsection