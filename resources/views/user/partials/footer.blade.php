<div class="map">
</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
					
				<p>	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
			</div>
			<div class="col-md-6">

				<div class="askme">

					<form action="/feedback" method="POST">
						@csrf
						
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						<div class="title">Сўров жўнатиш</div>
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="name" placeholder="Исм-шарифингиз" required>
								<input type="email" name="email" placeholder="Электрон почта" required>
								<input type="text" name="phone" placeholder="Телефон номер" required>
								<input type="text" name="org_name" placeholder="Корхона номи" required>
							</div>
							<div class="col-md-6">
								<textarea name="body" placeholder="Хабар матни" required></textarea>
								<input type="submit" value="Жўнатиш">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3">
				<div class="info">
					<i class="fa fa-map-marker"></i>
					<a class="text-white" href="https://www.google.com/maps/place/110+%D0%90%D0%BC%D0%B8%D1%80+%D0%A2%D0%B5%D0%BC%D1%83%D1%80+%D1%88%D0%BE%D2%B3+%D0%BA%D1%9E%D1%87%D0%B0%D1%81%D0%B8,+%D0%A2%D0%BE%D1%88%D0%BA%D0%B5%D0%BD%D1%82+100093,+O%60zbekiston/@41.3486011,69.28744,18.5z/data=!4m13!1m7!3m6!1s0x38aef3553271fda5:0xd8051ef5e4a272c7!2zMTEwINCQ0LzQuNGAINCi0LXQvNGD0YAg0YjQvtKzINC60Z7Rh9Cw0YHQuCwg0KLQvtGI0LrQtdC90YIgMTAwMDkzLCBPYHpiZWtpc3Rvbg!3b1!8m2!3d41.3487169!4d69.2880075!3m4!1s0x38aef3553271fda5:0xd8051ef5e4a272c7!8m2!3d41.3487169!4d69.2880075" target="_blank">
						Тошкент ш. Амир Темур кучаси 110 уй 
					</a>
					
				</div>
				<div class="info">
					<i class="fa fa-phone"></i>
					<a href="tel:+998 71 123 45 67" class="text-white">+ 998 71 123 45 67</a>
				</div>
				<div class="info">
					<i class="fa fa-envelope"></i>
					<a href="mailto:info@uzparranda.uz" class="text-white">info@uzparranda.uz</a> 
				</div>
			</div>
		</div>
		<div class="bottom">
			<div class="row">
				<div class="col-md-3 text-left">
					© 2021<a href="/"> Uzparranda.uz.</a>	
				</div>
				<div class="col-md-6">
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</footer>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

			</div>
			<div class="modal-body">
				<form action="/feedback" method="post" class="support">
					@csrf
					@if($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div class="title">Сўров жўнатиш</div>
					<div class="row">
						<div class="col-md-12">
							<input type="text" name="name" placeholder="Исм-шарифингиз" required>
							<input type="email" name="email" placeholder="Электрон почта" required>
							<input type="text" name="phone" placeholder="Телефон номер" required>
							<input type="text" name="org_name" placeholder="Корхона номи" required>
						</div>
						<div class="col-md-12">
							<textarea name="body" placeholder="Хабар матни" required></textarea>
							<input type="submit" value="Жўнатиш">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>