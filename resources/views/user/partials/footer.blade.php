<div class="map">
</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbZjyOU-2m3Pjh_bRNq9F_4imsQeUS-GCJ1w&usqp=CAU000000000" width="100" alt="logo">
				
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
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
				</div>
				<div class="info">
					<i class="fa fa-phone"></i>
					+ 998 71 123 45 67
				</div>
				<div class="info">
					<i class="fa fa-envelope"></i>
					info@uzparranda.uz
				</div>
			</div>
		</div>
		<div class="bottom">
			<div class="row">
				<div class="col-md-3 text-left">
					© 2021 Uzparranda.uz.
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