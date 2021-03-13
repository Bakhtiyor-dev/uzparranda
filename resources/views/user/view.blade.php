@extends('user.layouts.main',['class'=>'no-index'])

@section('content')
<div class="wrapper">
	@isset ($new)
		<div class="container">
			<h2 class="title">{!!$new->title!!}</h2>
			<div class="news">
				<div class="row">

					<div class="col-md-9">
						<div class="page">
							<div class="thumb_box">
								<img src="/storage/{{$new->image}}" alt="">
							</div>
							<div class="categ">Эълон</div>
							<div class="body">
								{!!$new->body!!}
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="widget">
							<ul class="ser_list">
								<li><a href="#"><i class="fa fa-check-square-o"></i>Фаолият</a></li>
								<li><a href="#"><i class="fa fa-check-square-o"></i>Низом</a></li>
								<li><a href="#"><i class="fa fa-check-square-o"></i>Хизматлар</a></li>
							</ul>
						</div>
						<div class="widget">
							<img src="/img/calendaar.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	@endisset		
</div>
@include('user.partials.clients')
@include('user.partials.links')
@endsection