<nav class="navbar">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="/pages/about" 
					@isset($page) 
						class="{{$page->name=='about'?'active':''}}"
					@endisset>Уюшма хакида</a></li>
				
				<li><a href="/news" class='{{Route::is('news') ? "active":""}}'>Янгиликлар</a></li>
				<li><a href="/events" class='{{Route::is('events') ? "active":""}}'>Вокеалар</a></li>
				<li><a href="/articles" class='{{Route::is('articles') ? "active":""}}'>Маколалар</a></li>
				
				<li><a href="/pages/law" 
					@isset($page) 
						class="{{$page->name=='law'?'active':''}}"
					@endisset>Конунчилик</a></li>

				<li><a href="/pages/inheritance" 
					@isset($page) 
						class="{{$page->name=='inheritance'?'active':''}}"
					@endisset>Наслчилик</a></li>
				
				<li><a href="/pages/zoovet" 
					@isset($page) 
						class="{{$page->name=='zoovet'?'active':''}}"
					@endisset >Ветеринария</a></li>
				
					<li><a href="/products" class='{{Route::is('products') ? "active":""}}'>Махсулотлар</a></li>
				<li><a href="/food" class='{{Route::is('food') ? "active":""}}'>Озукалар</a></li>

			</ul>
			<button class="open_search"><i class="fa fa-search"></i></button>
			
		</div>
	</div>			
</nav>	

<div class="search_box">
	<div class="container">
		<form action="/search" method="POST">
			<div class="input">
				@csrf
				<input type="text" name="search" placeholder="Қидирув" required>
				<input type="submit" value="Излаш">
			</div>
		</form>
	</div>
</div>