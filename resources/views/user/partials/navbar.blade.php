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
				<li><a href="/pages/about">Уюшма хакида</a></li>
				<li><a href="/news">Янгиликлар</a></li>
				<li><a href="/events">Вокеалар</a></li>
				<li><a href="/articles">Маколалар</a></li>
				<li><a href="/pages/law">Конунчилик</a></li>
				<li><a href="/pages/inheritance">Наслчилик</a></li>
				<li><a href="/pages/zoovet">Ветеринария</a></li>
				<li><a href="/products">Махсулотлар</a></li>
				<li><a href="/food">Озукалар</a></li>

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
				<input type="text" name="search" placeholder="Қидирув">
				<input type="submit" value="Излаш">
			</div>
		</form>
	</div>
</div>