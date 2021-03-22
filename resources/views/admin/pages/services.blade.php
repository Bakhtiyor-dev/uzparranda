@extends('admin.layouts.main')
@section('content')
@include('admin.modules.ckeditor',['name'=>'Хизматлар','data'=>$page])
@endsection