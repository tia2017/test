<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login | SC Inovasi</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/icon-kit/dist/css/iconkit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/ionicons/dist/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/c3/c3.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/dist/css/theme.min.css') }}">
        <script src="{{ asset('assets/src/js/vendor/modernizr-2.8.3.min.js') }}"></script>


        <link rel="stylesheet" href="{{ asset('assets/plugins/ionicons/dist/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/icon-kit/dist/css/iconkit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/dist/css/theme.min.css') }}">
        <script src="{{ asset('assets/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg">
                    		<img class="w-100 h-100" src="{{asset('assets/img/auth/kotadepok.jpg')}}">
                            <div class="lavalite-overlay">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div>
                                <a href="login"><img src="{{asset('assets/src/img/logo_item.png')}}" style="display: block;margin-left: auto;margin-right: auto;margin-bottom: 25px;" alt=""></a>
                            </div>
                            <h3>LOGIN</h3>
                            <!-- <p>Happy to see you again!</p> -->
                            <form action="/auth/login" method="POST">
                                @if(\Session::has('alert'))
                                    <div class="alert alert-danger">
                                        <div>{{Session::get('alert')}}</div>
                                    </div>
                                @endif
                                @if(\Session::has('alert-success'))
                                    <div class="alert alert-success">
                                        <div>{{Session::get('alert-success')}}</div>
                                    </div>
                                @endif
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email" required="">
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                            <!-- <span class="custom-control-label">&nbsp;Remember Me</span> -->
                                        </label>
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                    <button class="btn btn-theme">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.javascript')
    </body>
</html>
