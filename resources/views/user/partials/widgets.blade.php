<div class="col-md-3">
	<div class="widget">
		<ul class="ser_list">
			<li><a href="/pages/activity"><i class="fa fa-check-square-o"></i>Фаолият</a></li>
			<li><a href="/pages/rules"><i class="fa fa-check-square-o"></i>Низом</a></li>
			<li><a href="/pages/services"><i class="fa fa-check-square-o"></i>Хизматлар</a></li>
		</ul>
	</div>
	<div class="widget">
		<div class="calendar-container"></div>
	</div>
</div>
@section('scripts')
	<script src="/js/calendar.js"></script>
	<script>
		$(function(){
			$('.calendar-container').calendar();
		});
	</script>
@endsection