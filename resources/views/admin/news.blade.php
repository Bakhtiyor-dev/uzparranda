@extends('admin.layouts.main')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Новости:</h6>
		<a class="btn btn-primary float-right" href="/admin/news/add">Добавить</a>

	</div>
	
	<div class="card-body">
		<div class="table-responsive">

			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				
				<thead>
					<tr>
						<th>Название</th>
						<th>Содержание</th>
						<th>Действия</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Название</th>
						<th>Содержание</th>
						<th>Действия</th>
					</tr>
				</tfoot>
				<tbody>
					@foreach ($news as $new)
					<tr>
						<td>{{Str::limit($new->title,30,'(...)')}}</td>
						<td>{{Str::limit($new->body,60,'(...)')}}</td>
						<td>							
							<a href="#"><i class="fas fa-eye"></i></a>
							<a href="#"><i class="fas fa-edit"></i></a>
							<a href="#"><i class="fas fa-trash"></i></a>

						</td>

					</tr>	
					@endforeach
					

				</tbody>
			</table>
		</div>
	</div>
	</div
	
	@endsection

	@section('scripts')

	<script src="/js/datatables/jquery.dataTables.min.js"></script>
	<script src="/js/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="/js/demo/datatables-demo.js"></script>
	@endsection