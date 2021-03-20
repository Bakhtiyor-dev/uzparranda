@extends('admin.layouts.main')
@section('content')
@include('admin.modules.ckeditor',['name'=>'Конунчилик','data'=>$page])
@endsection