@extends('user.layouts.main',['class'=>'no-index'])

@section('content')
<div class="wrapper">
	@isset ($item)
		<div class="container">
			<h2 class="title">{!!$item->title!!}</h2>
			<div class="news">
				<div class="row">
					<div class="col-md-9">
						<div class="page">
							<div class="thumb_box">
								<img src="{{$item->image}}" alt="">
							</div>
							<div class="categ">Эълон</div>
							<div class="body">
								{!!$item->body!!}
							</div>
						</div>
					</div>
					@include('user.partials.widgets')
				</div>
			</div>
		</div>
	@endisset		
</div>
@include('user.partials.clients')
@include('user.partials.links')
@endsection