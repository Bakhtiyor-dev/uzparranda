@extends('user.layouts.main',['class'=>'no-index'])

@section('content')

<div class="wrapper">
	<div class="container">
		<h2 class="title">Янгиликлар</h2>
		<div class="news">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						@isset($news)	
							@forelse ($news as $data)
									<div class="col-md-4">
										<div class="news_box">
											<div class="img"><img src="{{$data->image}}" alt="image"></div>
											<div class="categ">Эълон</div>	
											<div class="body">
												<a href="/view/{{$data->id}}">{{$data->title}}</a>
												<div class="desc">{!!$data->body!!}</div>
											</div>
										</div>
									</div>
							@empty 
								<p>Нет новостей</p>	
							@endforelse
						@endisset	
					</div>
					{{$news->links('user.partials.pagination')}}
				</div>
				@include('user.partials.widgets')
			</div>
		</div>
	</div>
</div>
@include('user.partials.clients')
@include('user.partials.links')

@endsection