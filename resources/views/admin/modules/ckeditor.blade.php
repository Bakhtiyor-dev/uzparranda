<textarea name="{{$name}}" id="editor">{!!$data->body!!}</textarea>

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