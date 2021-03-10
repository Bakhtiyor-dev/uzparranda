@extends('layouts.main',['class'=>'no-index'])

@section('content')

<div class="wrapper">
	<div class="container">
		<h2 class="title">Янгиликлар</h2>
		<div class="news">
			<div class="row">

				<div class="col-md-9">
					<div class="row">
						<div class="col-md-4">
							<div class="news_box">
								<div class="img"><img src="img/pict1.jpg" alt=""></div>
								<div class="categ">Эълон</div>	
								<div class="body">
									<a href="#">Фарғонада паррандачилик мактаби иш бошлади</a>
									<div class="desc">Лойиҳа доирасида аҳолига паррандачиликни тўғри ташкил этиш, парваришлаш ва махсус инкубаторлар билан ишлаш жараёнларини амалиёт билан боғлиқ ҳолда ўргатишга қаратилган ўқув-семинарлари ташкил этилади</div>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="news_box">
								<div class="img"><img src="img/pict1.jpg" alt=""></div>
								<div class="categ">Эълон</div>	
								<div class="body">
									<a href="#">Фарғонада паррандачилик мактаби иш бошлади</a>
									<div class="desc">Лойиҳа доирасида аҳолига паррандачиликни тўғри ташкил этиш, парваришлаш ва махсус инкубаторлар билан ишлаш жараёнларини амалиёт билан боғлиқ ҳолда ўргатишга қаратилган ўқув-семинарлари ташкил этилади</div>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="news_box">
								<div class="img"><img src="img/pict1.jpg" alt=""></div>
								<div class="categ">Эълон</div>	
								<div class="body">
									<a href="#">Фарғонада паррандачилик мактаби иш бошлади</a>
									<div class="desc">Лойиҳа доирасида аҳолига паррандачиликни тўғри ташкил этиш, парваришлаш ва махсус инкубаторлар билан ишлаш жараёнларини амалиёт билан боғлиқ ҳолда ўргатишга қаратилган ўқув-семинарлари ташкил этилади</div>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="news_box">
								<div class="img"><img src="img/pict1.jpg" alt=""></div>
								<div class="categ">Эълон</div>	
								<div class="body">
									<a href="#">Фарғонада паррандачилик мактаби иш бошлади</a>
									<div class="desc">Лойиҳа доирасида аҳолига паррандачиликни тўғри ташкил этиш, парваришлаш ва махсус инкубаторлар билан ишлаш жараёнларини амалиёт билан боғлиқ ҳолда ўргатишга қаратилган ўқув-семинарлари ташкил этилади</div>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="news_box">
								<div class="img"><img src="img/pict1.jpg" alt=""></div>
								<div class="categ">Эълон</div>	
								<div class="body">
									<a href="#">Фарғонада паррандачилик мактаби иш бошлади</a>
									<div class="desc">Лойиҳа доирасида аҳолига паррандачиликни тўғри ташкил этиш, парваришлаш ва махсус инкубаторлар билан ишлаш жараёнларини амалиёт билан боғлиқ ҳолда ўргатишга қаратилган ўқув-семинарлари ташкил этилади</div>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="news_box">
								<div class="img"><img src="img/pict1.jpg" alt=""></div>
								<div class="categ">Эълон</div>	
								<div class="body">
									<a href="#">Фарғонада паррандачилик мактаби иш бошлади</a>
									<div class="desc">Лойиҳа доирасида аҳолига паррандачиликни тўғри ташкил этиш, парваришлаш ва махсус инкубаторлар билан ишлаш жараёнларини амалиёт билан боғлиқ ҳолда ўргатишга қаратилган ўқув-семинарлари ташкил этилади</div>

								</div>
							</div>
						</div>
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

@include('partials.clients')
@include('partials.links')

@endsection