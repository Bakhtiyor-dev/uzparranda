@extends('admin.layouts.main')
@section('content')
@include('admin.modules.ckeditor',['name'=>'zoovet','data'=>$page])
@endsection