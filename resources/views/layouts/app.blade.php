<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Template</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
	<link rel="stylesheet" href="{{asset('css/slick.css')}}">
	<link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/media.css')}}">
</head>
<body>
	
	@yield('content')
	
	<div class="map"></div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h1>LOGO</h1>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.

				</div>
				<div class="col-md-6">
					<div class="askme">
						<form action="">
							<div class="title">Сўров жўнатиш</div>
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Исм-шарифингиз">
									<input type="text" placeholder="Электрон почта">
									<input type="text" placeholder="Телефон номер">
									<input type="text" placeholder="Корхона номи">
								</div>
								<div class="col-md-6">
									<textarea name="" id="" placeholder="Хабар матни"></textarea>
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
						© 2017 Uzparranda.uz.
					</div>
					<div class="col-md-6">
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
						</ul>
					</div>
					<div class="col-md-3 text-right">
						<a href="#">Сайт яратилди MD.uz</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="js/main.js"></script>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					
				</div>
				<div class="modal-body">
					<form action="" class="support">
						<div class="title">Сўров жўнатиш</div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" placeholder="Исм-шарифингиз">
								<input type="text" placeholder="Электрон почта">
								<input type="text" placeholder="Телефон номер">
								<input type="text" placeholder="Корхона номи">
							</div>
							<div class="col-md-12">
								<textarea name="" id="" placeholder="Хабар матни"></textarea>
								<input type="submit" value="Жўнатиш">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>