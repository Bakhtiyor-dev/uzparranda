@extends('admin.layouts.main')
@section('content')
@include('admin.modules.ckeditor',['name'=>'Наслчилик','data'=>$page])
@endsection