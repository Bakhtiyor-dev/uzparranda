@extends('admin.layouts.main')
@section('content')

<h4 class="float-left">Сообщения от пользователей:</h4>
<form action="/admin/feedback" method="post" class="float-right">
	@csrf
	@method('DELETE')
	<input type="hidden" id="ids_for_delete"  name="feedbacks" >
	<button type="submit" class="btn btn-danger m-2" id="delete_btn" disabled>Удалить отмеченные</button>
</form>		


<div class="table-responsive bg-light">
	<table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
		<thead>
			<th></th>
			<th>ФИО</th>
			<th>Почта</th>
			<th>Телефонный номер</th>
			<th>Организация</th>
			<th>Текст</th>
			<th>Время отправления</th>

		</thead>
		<tbody>
			@isset ($messages)
			@forelse($messages as $message)
			<!-- row -->
			<tr class="border-left-primary">
				<!-- label -->
				<td class="pl-3">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" 
								onchange="toggle(this.checked,this.value)" 
								value="{{$message->id}}" 
								class="custom-control-input" 
								id="cst{{$message->id}}"/>
						<label class="custom-control-label" for="cst{{$message->id}}">&nbsp;</label>
					</div>
				</td>
				<!-- star -->
				<td>
					<span class="mb-0 text-muted">{{$message->name}}</span>
				</td>
				<td>
					<span class="mb-0 text-muted">{{$message->email}}</span>
				</td>
				<td>
					<span class="mb-0 text-muted">{{$message->phone_number}}</span>
				</td>

				<td>
					<span class="mb-0 text-muted">{{$message->org_name}}</span>
				</td>
				<!-- Message -->
				<td>
					<a class="link" href="#" data-toggle="modal" data-target="#modal-{{$message->id}}">
						<span class="text-dark">{{Str::limit($message->body,30,'...')}}</span>
					</a>
				</td>
				<!-- Attachment -->
				<!-- Time -->
				<td class="text-muted">{{$message->created_at}}</td>
			</tr>

			<!-- Modal -->
			<div class="modal fade" id="modal-{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Текст сообщения</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							{{$message->body}}
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			@empty 
			<p>Сообщений нет</p>
			@endforelse
			@endisset
		</tbody>
	</table>
</div>

@endsection
@section('scripts')
	<script>
		var array=[];
		
		function add(id){
			array.push(id);
			$('#ids_for_delete').val(array);
		}

		function remove(id){
			const i = array.indexOf(id);
			array.splice(i, 1);
			$('#ids_for_delete').val(array);
		}

		function toggle(checked,id){
			if(checked)
				add(id);
			else
				remove(id);

			if($('#ids_for_delete').val()==''){
				$('#delete_btn').attr('disabled','disabled');
			}else{
				$('#delete_btn').removeAttr('disabled');
			}
		}
			

	</script>
@endsection