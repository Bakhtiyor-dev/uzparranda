<div class="info_box">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="/articles" class="magazin">
					“Ўзбекистон Паррандачилиги” журнали
					<img src="img/magazine.png" alt="">
				</a>
			</div>
			<div class="col-md-6">
				<div class="video">
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/4cWSat1e-Pg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-3">
			<div class="widget">
				<div class="title">Сўровнома</div>
				<div class="ques">Бизнинг сайтимиз сизга ёқдими?</div>
				<form action="/rate" method="POST">
					@csrf
					<input type="radio" name="rate" value="yes" checked>
					<label for="">Ха</label>
					<br>
					<input type="radio" name="rate" value="no">
					<label for="">Йук</label>
					<br>
					<input type="submit" value="OK">
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>