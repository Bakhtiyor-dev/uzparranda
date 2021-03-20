<div class="news">
	<div class="container">
		@include('user.partials.widgets')
		<div class="col-md-9">
			<div class="row">
			@isset ($lastNews)
				@forelse ($lastNews as $news)
					<div class="col-md-4">
						<div class="news_box">
							<div class="img"><img src="{{$news->image}}" alt="image"></div>
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