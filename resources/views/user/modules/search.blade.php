@extends('user.layouts.main',['class'=>'no-index'])
@section('content')

{{-- @dd($searchResults->groupByType()) --}}
<div class="container bootstrap snippets bootdey">
    <div class="row content">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h2>
                    Найдено {{$count}} результатов для: <span class="text-navy">{{$search}}</span>
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
                    @foreach ($searchResults as $type=>$modelSearchResults)
                        <h2>{{$type}}</h2>
                        
                        @foreach($modelSearchResults as $res)
                        {{-- @dd($res) --}}
                             
                            <div class="search-result">
                                <h3><a href="{{ $res->userPath() }}">{{$res->title}}</a></h3>
                                <a href="{{$res->userPath()}}" class="search-link">{{'http://bird.uz'.$res->userPath()}}</a>
                                <p>
                                    {{Str::limit($res->body,200,'...')}}
                                </p>
                            </div>
                        @endforeach  
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
    @if($count==0)
        <script>
            $('.paginate-pagination').hide();
            $('.content').css('margin-bottom','20px');
        </script>
    @endif
@endsection