@extends('layouts.main',['class'=>'no-index'])

@section('content')
	<div class="wrapper">
		<div class="container">
			<h2 class="title">Алока</h2>
			<div class="contact">
				<div class="row">
					<div class="col-md-4">
						<i class="fa fa-phone"></i>
						+998 71 238 64 15 <br>
						+998 71 238 14 55
					</div>
					<div class="col-md-4">
						<i class="fa fa-map-marker"></i>
						Toshkent 100200,
						Amir Temur shox ko'chasi 108 uy
					</div>
					<div class="col-md-4">
						<i class="fa fa-envelope"></i>
						info@uzparranda.uz
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('partials.links')
@endsection