<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description"
        content="LetStart Admin is a full featured, multipurpose, premium bootstrap admin template built with Bootstrap 4 Framework, HTML5, CSS and JQuery.">
    <meta name="keywords"
        content="admin, panels, dashboard, admin panel, multipurpose, bootstrap, bootstrap4, all type of dashboards">
    <meta name="author" content="Mainor Aguilar">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CMV - Centro M&eacute;dico</title>

    <link rel="shortcut icon" href="medicalDashboard/assets/images/favicon.ico" type="image/x-icon" />

    <!-- ================== BEGIN PAGE LEVEL CSS START ================== -->
    <link rel="stylesheet" href="medicalDashboard/assets/css/icons.css" />
    <link rel="stylesheet" href="medicalDashboard/assets/libs/wave-effect/css/waves.min.css" />
    <link rel="stylesheet" href="medicalDashboard/assets/libs/owl-carousel/css/owl.carousel.min.css" />
    <!-- ================== BEGIN PAGE LEVEL END ================== -->

    <!-- ================== Plugins CSS  ================== -->
    <link rel="stylesheet" href="medicalDashboard/assets/libs/flatpicker/css/flatpickr.min.css">

    <!-- ================== Plugins CSS  ================== -->
    <link rel="stylesheet" href="medicalDashboard/assets/libs/owl-carousel/css/owl.carousel.min.css" />
    <!-- ================== Plugins CSS end ================== -->

    <!-- ================== BEGIN APP CSS  ================== -->
    <link rel="stylesheet" href="medicalDashboard/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="medicalDashboard/assets/css/styles.css" />

    <!-- ================== END APP CSS ================== -->

    <!-- ================== BEGIN POLYFILLS  ================== -->
    <!--[if lt IE 9]>
     <script src="medicalDashboard/assets/libs/html5shiv/js/html5shiv.js"></script>
     <script src="medicalDashboard/assets/libs/respondjs/js/respond.min.js"></script>
  <![endif]-->
    <!-- ================== END POLYFILLS  ================== -->


    <!-- <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <!-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    CMV
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        

        
    </div> -->
    <main class="py-4">
            @yield('content')
        </main>


    <!-- ================== BEGIN BASE JS ================== -->
    <script src="medicalDashboard/assets/js/vendor.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- ================== END BASE JS ================== -->

    <script src="medicalDashboard/assets/libs/flatpicker/js/flatpickr.js"></script>
    <script src="medicalDashboard/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="medicalDashboard/assets/libs/chartjs/js/Chart.bundle.min.js"></script>



    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="medicalDashboard/assets/js/utils/colors.js"></script>
    <script src="medicalDashboard/assets/libs/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="medicalDashboard/assets/libs/jquery-validation/js/jquery.validate.min.js"></script>
    <script src="medicalDashboard/assets/libs/jquery-validation/js/additional-methods.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    <!-- ================== BEGIN PAGE JS ================== -->
    <script src="medicalDashboard/assets/js/app.js"></script>
    <!-- ================== END PAGE JS ================== -->
    <script>
    $(".auth-user-testimonial .owl-carousel").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    //Initialize form
    $('#loginForm').validate({
        focusInvalid: false,
        rules: {
            'validation-email': {
                required: true,
                email: true
            },
            'validation-password': {
                required: true,
            }
        },
        errorPlacement: function errorPlacement(error, element) {
            $(element).siblings(".validation-error").removeClass("d-none")
            return true
        },
        highlight: function(element) {
            var $el = $(element);
            var $parent = $el.parents('.form-group');
            $parent.addClass("invalid-field")
        },
        unhighlight: function(element) {
            var $el = $(element);
            var $parent = $el.parents('.form-group');
            $parent.removeClass("invalid-field");
            $(element).siblings(".validation-error").addClass("d-none")
        },
        submitHandler: function(form) {
            var formdata = $(form).serializeArray();
            var data = {};
            $(formdata).each(function(index, obj) {
                data[obj.name] = obj.value;
            });
            alert("Data has been submitted. Please see console log");
            console.log("form data ===>", data);
            $(form)[0].reset();
            $(".floating-label").removeClass("enable-floating-label");
        }
    });
    </script>

</body>
</html>
