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

<h3>Добавить {{$name}}</h3>
<form action="/admin/{{$table}}/add" method="post" class="form" enctype="multipart/form-data">
	@csrf
	<label for="title">Название:</label>
	<input type="text" id="title" name="title" class="form-control" >
	
	<label for="image">Изображение</label>
	<div class="custom-file">
		<input type="file" class="custom-file-input" id="image" name="img" id="customFile" accept="image/*">
		<label class="custom-file-label" for="customFile">Choose file</label>
	</div>
	<label for="editor">Содержимое:</label>			
	<textarea name="body" id="editor"></textarea>
	<div class="custom-control custom-checkbox float-left m-2">
		<input type="checkbox" class="custom-control-input" name="status" id="cst1" />
		<label class="custom-control-label" for="cst1">&nbsp;Показывать для пользователей</label>
	</div>
	<button type="submit" class="btn btn-primary float-right mt-2">Добавить</button>
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
<script src="/js/ckeditor5-build-classic/ckeditor.js"></script>
<script src="/js/app.js"></script>
<script src="/js/dropzone/dropzone.js"></script>
<script>
	ClassicEditor
	.create( document.querySelector( '#editor' ),{
		toolbar:[
		"Essentials", "CKFinderUploadAdapter", "Autoformat", "Bold", "Italic", "BlockQuote", "CKFinder", "CloudServices", "EasyImage", "Heading", "Image", "ImageCaption", "ImageStyle", "ImageToolbar", "ImageUpload", "Indent", "Link", "List", "MediaEmbed", "Paragraph", "PasteFromOffice", "Table", "TableToolbar", "TextTransformation"
		]
	} )
	.then( editor => {
		console.log( editor );
	} )
	.catch( error => {
		console.error( error );
	} );
</script>


@endsection