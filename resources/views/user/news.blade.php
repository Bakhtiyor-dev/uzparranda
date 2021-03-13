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
											<div class="img"><img src="/storage/{{$data->image}}" alt="image"></div>
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
					<ul class="navi">
						<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">13</a></li>
						<li><a href="#">14</a></li>
						<li><a href="#">15</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul>
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
						<img src="img/calendaar.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('user.partials.clients')
@include('user.partials.links')

@endsection