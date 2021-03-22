<?php
use App\Models\Feedback;
    \Carbon\Carbon::setLocale('ru');   
    $feedbacks=Feedback::where('read',0)->take(5)->get();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Панель админа</title>

    <!-- Custom fonts for this template-->
    <link href="/fonts/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    @yield('customStyles')
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-text mx-3">Админ</div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{Route::is('admin')?'active':''}}">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Панель</span></a>
            </li>

            <li class="nav-item {{Route::is('feedback')?'active':''}}">
                <a class="nav-link" href="/admin/feedback">
                    <i class="fas fa-fw fa-inbox"></i>
                    <span>Сообщения</span></a>
            </li>

            <li class="nav-item {{Route::is('products.index')?'active':''}}">
                <a class="nav-link" href="/admin/products">
                    <i class="fas fa-dolly"></i>
                <span>Продукты</span></a>
            </li>

            <li class="nav-item {{Route::is('food.index')?'active':''}}">
                <a class="nav-link" href="/admin/food">
                    <i class="fas fa-carrot"></i>
                    <span>Кормы</span></a>
            </li>
            <!-- Heading -->
            <div class="sidebar-heading">
                Контент
            </div>

            <li class="nav-item {{Route::is('news.index')?'active':''}}">
                <a class="nav-link" href="/admin/news">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Новости</span></a>
            </li>

            <li class="nav-item {{Route::is('articles.index')?'active':''}}">
                <a class="nav-link" href="/admin/articles">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Статьи</span></a>
            </li>

            <li class="nav-item {{Route::is('events.index')?'active':''}}">
                <a class="nav-link" href="/admin/events">
                    <i class="fas fa-fw fa-calendar-alt"></i>
                    <span>События</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{Route::is('page') ? '' : 'collapsed'}}" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="{{Route::is('page')}}" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Страницы</span>
                </a>
                
                <div id="collapsePages" class="collapse {{Route::is('page') ? 'show' : ''}}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item 
                            @isset($page)
                                {{$page->name=='about'?'active':''}}
                            @endisset" 
                            href="/admin/pages/about">
                            Уюшма хакида
                        </a>

                        <a class="collapse-item 
                            @isset($page)
                                {{$page->name=='activity'?'active':''}}
                            @endisset" 
                            href="/admin/pages/activity">
                            Фаолият
                        </a>

                        <a class="collapse-item 
                            @isset($page)
                                {{$page->name=='rules'?'active':''}}
                            @endisset" 
                            href="/admin/pages/rules">
                            Низом
                        </a>

                        <a class="collapse-item 
                            @isset($page)
                                {{$page->name=='services'?'active':''}}
                            @endisset" 
                            href="/admin/pages/services">
                            Хизматлар
                        </a>

                        <a class="collapse-item 
                            @isset($page)
                                {{$page->name=='law'?'active':''}}
                            @endisset" 
                            href="/admin/pages/law">
                            Конунчилик
                        </a>
                        
                        <a class="collapse-item 
                            @isset($page)
                                {{$page->name=='inheritance'?'active':''}}
                            @endisset"
                            href="/admin/pages/inheritance">
                            Наслчилик
                        </a>
                        
                        <a class="collapse-item 
                            @isset($page)
                                {{$page->name=='zoovet'?'active':''}}
                            @endisset" 
                            href="/admin/pages/zoovet">
                            Ветеринария
                        </a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                            action="/admin/search" method="POST">
                            @csrf
                        <div class="input-group">
                            <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Поиск..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search"
                                    action="/admin/search" method="POST">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                @isset($feedbacks)
                                    <span class="badge badge-danger badge-counter">{{$feedbacks->count()}}</span>
                                @endisset
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Сообщения
                                </h6>
                                @if(isset($feedbacks) && !$feedbacks->isEmpty())    
                                    @foreach($feedbacks as $feedback)
                                        <a class="dropdown-item d-flex align-items-center" href="/admin/feedback#{{$feedback->id}}">
                                            <div class="font-weight-bold">
                                                <div class="text-truncate">{{$feedback->body}}</div>
                                                <div class="small text-gray-500">{{$feedback->name}} {{$feedback->created_at->diffForHumans()}}</div>
                                            </div>
                  
    
                                        </a>
                                    @endforeach
                                @else
                                    <a class="dropdown-item d-flex align-items-center">
                                        <div class="font-weight-bold">
                                            <div class="text-truncate text-center">Пока нет новых сообщений.</div>
                                        </div>
                                    </a>
                                @endif
                                <a class="dropdown-item text-center small text-gray-500" href="/admin/feedback">Остальные</a>
                            </div>

                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Админ</span>
                                <img class="img-profile rounded-circle" src="/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/admin/logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Выйти
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; bird.uz 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="/js/jquery/jquery.min.js"></script>
    <script src="/js/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/js/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>


    @yield('scripts')

</body>

</html>
