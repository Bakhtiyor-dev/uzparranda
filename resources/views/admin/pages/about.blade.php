@extends('admin.layouts.main')
@section('content')
@include('admin.modules.ckeditor',['name'=>'Уюшма хакида','data'=>$page])
@endsection