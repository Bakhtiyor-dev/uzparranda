@extends('admin.layouts.main')
@section('content')
@include('admin.modules.ckeditor',['name'=>'Ветеринария','data'=>$page])
@endsection