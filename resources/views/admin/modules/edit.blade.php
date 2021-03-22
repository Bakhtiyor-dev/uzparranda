@extends('admin.layouts.main')
@section('content')

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

<h3 class="text-dark">Редактировать {{$name}} </h3>
<form action="/admin/{{$table}}/{{$item->id}}" 
		method="post" 
		class="form text-dark" 
		enctype="multipart/form-data">
	@csrf
    @method('PATCH')
	<label for="title">Название:</label>
	<input type="text" 
			id="title" 
			name="title" 
			value="{{$item->title}}" 
			class="form-control" >
	
	<label class="mt-2" for="image">Изображение:</label>
	<div class="file-drop-area border"> 
		<span class="choose-file-button btn-outline-info">Выберите изображение</span> 
		<span class="file-message">или перетащите сюда</span> 
		<input type="file" 
				class="file-input" 
				id="image" 
				name="img"  
				accept=".jpg,.jpeg,.png,.gif" > 
	</div>
	<div id="divImageMediaPreview"><img src="{{$item->image}}" alt="image"></div>

	<label for="editor" class="mt-2">Содержимое:</label>			
	<textarea name="body" 
				id="editor">{!!$item->body!!}</textarea>
	<div class="custom-control custom-checkbox float-left m-2">
		<input type="checkbox" 
				class="custom-control-input" 
				name="status" 
				id="cst" />
		<label class="custom-control-label" for="cst">&nbsp;Показывать для пользователей</label>
	</div>
	<button type="submit" class="btn btn-primary float-right mt-2">Сохранить</button>
</form>
@endsection

@section('customStyles')
<style>
	.ck-editor__editable_inline {
		min-height: 400px;
	}
</style>
@endsection

@section('scripts')
<script src="/js/image-upload.js"></script>
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