@extends('admin.layouts.main')
@section('content')
@include('admin.modules.ckeditor',['name'=>'Низом','data'=>$page])
@endsection