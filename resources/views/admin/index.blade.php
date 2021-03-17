@extends('admin.layouts.main')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">УЗПАРРАНДАСАНОАТ</h1>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow  py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <h6><a href='/admin/feedback'>Cообщения от пользователей</a></h6>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="card border-left-warning shadow mt-2 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <h6><a href='admin/website-data'>Данные сайта</a></h6>
                        </div>
                     
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-table fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
 --}}
        <div class="card border-left-warning shadow mt-2 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <h6><a href='/admin/products'>Продукты</a></h6>
                        </div>
                     
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dolly fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-left-warning shadow mt-2 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <h6><a href='/admin/food'>Кормы</a></h6>
                        </div>
                     
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-carrot fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Статистика посетителей</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Row -->





@endsection


@section('scripts')
<!-- Page level plugins -->
<script src="/js/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="/js/demo/chart-area-demo.js"></script>

@endsection