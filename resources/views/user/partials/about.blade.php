@isset ($data)  
@if(!empty($data))
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3 class="title">Уюшма хакида</h3>
					<hr class="bold">
				</div>
				<div class="col-md-6">
					{!!$data->body!!} 
				</div>
				<div class="col-md-3">
					<h4>Файзиев Мансур</h4>
					<div class="lvl">Директор </div>
					<hr class="bold">
				</div>
			</div>
		</div>
	</div>

@else
<p>Пусто...</p>	
@endif
@endisset