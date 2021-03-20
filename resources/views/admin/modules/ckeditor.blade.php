@if(session('success'))
	<div class="alert alert-success">{{session('success')}}</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif
<h4 class="mb-3 text-dark">Страница {{$name}} :</h4>			
<form action="/admin/pages/{{$data->name}}" method="POST">
    @csrf
    @method('PATCH')
    <textarea name="body" 
				id="editor" 
                class="text-dark">
    {!!$data->body!!}
    </textarea>
    <button type="submit" class="btn btn-outline-primary mt-2 float-right">Сохранить</button>
</form>	

@section('customStyles')
<style>
	.ck-editor__editable_inline {
		min-height: 400px;
	}
</style>
@endsection

@section('scripts')
<script src="/js/ckeditor5-build-classic/ckeditor.js"></script>
<script>
	ClassicEditor
	.create( document.querySelector( '#editor' ),{
		toolbar: {
			items: [
				'heading', '|',
				'fontfamily', 'fontsize', '|',
				'alignment', '|',
				'fontColor', 'fontBackgroundColor', '|',
				'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
				'link', '|',
				'outdent', 'indent', '|',
				'bulletedList', 'numberedList', 'todoList', '|',
				'code', 'codeBlock', '|',
				'insertTable', '|',
				 'blockQuote', '|',
				'undo', 'redo'
			],
		shouldNotGroupWhenFull: true
		}
	} )
	.then( editor => {
		console.log( editor );
	})
	.catch( error => {
		console.error( error );
	});
</script>
@endsection