<div class="news">
	<div class="container">
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
		<div class="col-md-9">
			<div class="row">
			@isset ($lastNews)
				@forelse ($lastNews as $news)
					<div class="col-md-4">
						<div class="news_box">
							<div class="img"><img src="/storage/{{$news->image}}" alt="image"></div>
							<div class="categ">Эълон</div>	
							<div class="body">
								<a href="/view/{{$news->id}}">{{$news->title}}</a>
								<div class="desc">{!!$news->body!!}</div>
							</div>
						</div>
					</div>
				@empty 
				    <p>Нет новостей</p>	
				@endforelse
			@endisset
			</div>
		</div>
	</div>
</div>