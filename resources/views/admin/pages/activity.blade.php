@extends('admin.layouts.main')
@section('content')
@include('admin.modules.ckeditor',['name'=>'Фаолият','data'=>$page])
@endsection