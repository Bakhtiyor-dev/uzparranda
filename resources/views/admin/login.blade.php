<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 ">
                        <!-- Nested Row within Card Body -->
                            <div class="container w-50">
                                <div class="p-5">
                                    @if(session()->has('msg'))
                                        <div class="alert alert-danger">{{session('msg')}}</div>
                                    @endif
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Админ</h1>
                                    </div>
                                    <form class="user" action="/admin/login" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text"
                                                name="login"
                                                class="form-control form-control-user"
                                                id="exampleInputEmail" 
                                                placeholder="Логин..">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" 
                                                    name="password"
                                                    class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="Пароль...">
                                        </div>
                                      
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Войти
                                        </button>                                        
                                    </form>
                                    <hr>
                                  
                                </div>
                           
                            </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


</body>

</html>