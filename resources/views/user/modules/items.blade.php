@extends('user.layouts.main',['class'=>'no-index'])

@section('content')

<div class="wrapper">
	<div class="container">
		<h2 class="title">{{$name}}</h2>
		<div class="news">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						@isset($items)	
							@forelse ($items as $data)
									<div class="col-md-4">
										<div class="news_box">
											<div class="img"><img src="{{$data->image}}" alt="image"></div>
											@unless(!$label)
												<div class="categ">Эълон</div>	
											@endunless()
											<div class="body">
												<a href="/{{$table}}/view/{{$data->id}}">{{$data->title}}</a>
												<div class="desc">{!!$data->body!!}</div>
											</div>
										</div>
									</div>
							@empty 
								<p>Нет новостей</p>	
							@endforelse
						@endisset	
					</div>
					{{$items->links('user.partials.pagination')}}
				</div>
				@include('user.partials.widgets')
			</div>
		</div>
	</div>
</div>
@include('user.partials.clients')
@include('user.partials.links')

@endsection