@extends('admin.layouts.main',['class'=>'no-index'])
@section('content')

<div class="row">
	
	<div class="card border-left-warning shadow  py-2 m-1">
	    <div class="card-body">
	        <div class="row no-gutters align-items-center">
	            <div class="col mr-2">
	                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
	                    <h6><a href='admin/feedback'>Логотип</a></h6>
	                </div>
	            </div>
	            <div class="col-auto">
	                <i class="fas fa-comments fa-2x text-gray-300"></i>
	            </div>
	        </div>
	    </div>
	</div>
	
	<div class="card border-left-warning shadow  py-2 m-1">
	            <div class="card-body">
	                <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
	                            <h6><a href='admin/feedback'>Cообщения от пользователей</a></h6>
	                        </div>
	                    </div>
	                    <div class="col-auto">
	                        <i class="fas fa-comments fa-2x text-gray-300"></i>
	                    </div>
	                </div>
	            </div>
	</div>

	<div class="card border-left-warning shadow  py-2 m-1">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        <h6><a href='admin/feedback'>Cообщения от пользователей</a></h6>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
	</div>

</div>

@endsection