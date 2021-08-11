<!DOCTYPE html>
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
    <title>Admin | CMV</title>
    <link rel="shortcut icon" href="medicalDashboard/assets/images/favicon.ico" type="image/x-icon" />

    <!-- ================== BEGIN PAGE LEVEL CSS START ================== -->
    <link rel="stylesheet" href="medicalDashboard/assets/css/icons.css" />
    <link rel="stylesheet" href="medicalDashboard/assets/libs/wave-effect/css/waves.min.css" />
    <link rel="stylesheet" href="medicalDashboard/assets/libs/owl-carousel/css/owl.carousel.min.css" />
    <!-- ================== BEGIN PAGE LEVEL END ================== -->

    <!-- ================== Plugins CSS  ================== -->
    <link rel="stylesheet" href="medicalDashboard/assets/libs/flatpicker/css/flatpickr.min.css">
    <!-- ================== Plugins CSS ================== -->

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
</head>

<body class="left-side-menu-condensed">
    <!-- Begin Page -->
    <div class="page-wrapper">
        <!-- Begin Header -->
        <!-- Begin Header -->
        <header id="page-topbar" class="topbar-header">
            <div class="navbar-header">
                <div class="left-bar">
                    <div class="navbar-brand-box">
                        <a href="{{ url('/') }}" class="logo logo-dark">
                            <span class="logo-sm"><img src="medicalDashboard/assets/images/logo-white-sm.png"
                                    alt="Lettstart Admin"></span>
                            <span class="logo-lg"><img src="medicalDashboard/assets/images/logo-white.png"
                                    alt="Lettstart Admin"></span>
                        </a>
                        <a href="{{ url('/') }}" class="logo logo-light">
                            <span class="logo-sm"><img src="medicalDashboard/assets/images/logo-sm.png"
                                    alt="Lettstart Admin"></span>
                            <span class="logo-lg"><img src="medicalDashboard/assets/images/logo.png"
                                    alt="Lettstart Admin"></span>
                        </a>
                    </div>
                    <button type="button" id="vertical-menu-btn" class="btn hamburg-icon">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <form class="app-search d-none d-lg-block">
                        <div class="search-box position-relative">
                            <input type="text" placeholder="Buscar..." class="form-control">
                            <span class="bx bx-search"></span>
                        </div>
                    </form>
                    <div class="dropdown-mega dropdown d-none d-lg-block ml-2">

                    </div>
                </div>
                <div class="right-bar">
                    <div class="d-inline-flex ml-0 ml-sm-2 d-lg-none dropdown">
                        <button data-toggle="dropdown" aria-haspopup="true" type="button"
                            id="page-header-search-dropdown" aria-expanded="false" class="btn header-item notify-icon">
                            <i class="bx bx-search"></i>
                        </button>
                        <div aria-labelledby="page-header-search-dropdown"
                            class="dropdown-menu-lg dropdown-menu-right p-0 dropdown-menu">
                            <form class="p-3">
                                <div class="search-box">
                                    <div class="position-relative">
                                        <input type="text" placeholder="Buscar..." class="form-control form-control-sm">
                                        <i class="bx bx-search icon"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-inline-flex ml-0 ml-sm-2 dropdown">
                        <button aria-haspopup="true" data-toggle="dropdown" type="button"
                            id="page-header-country-dropdown" aria-expanded="false" class="btn header-item"
                            title="Lenguajes que soporte Cenec">
                            <img src="medicalDashboard/assets/images/flags/hn.svg" class="mh-16" alt="Honduras">
                            <span class="ml-2 d-none d-sm-inline-block">HN</span>
                        </button>
                        <div aria-labelledby="page-header-country-dropdown" id="countries"
                            class="dropdown-menu-right dropdown-menu">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img class="mr-1 mh-12" src="medicalDashboard/assets/images/flags/hn.svg"
                                    alt="Honduras">
                                <span class="align-middle" data-lang="hn">HN</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img class="mr-1 mh-12" src="medicalDashboard/assets/images/flags/us.svg" alt="USA">
                                <span class="align-middle" data-lang="us">USA</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-none d-lg-inline-flex ml-2 dropdown">
                        <button data-toggle="dropdown" aria-haspopup="true" type="button" id="page-header-app-dropdown"
                            aria-expanded="false" class="btn header-item notify-icon">
                            <i class="bx bx-customize"></i>
                        </button>
                        <div aria-labelledby="page-header-app-dropdown"
                            class="dropdown-menu-lg dropdown-menu-right dropdown-menu">
                            <div class="px-lg-2">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <a href="javascript: void(0);" class="dropdown-icon-item">
                                            <img src="medicalDashboard/assets/images/brands/github.png" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript: void(0);" class="dropdown-icon-item">
                                            <img src="medicalDashboard/assets/images/brands/bitbucket.png"
                                                alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript: void(0);" class="dropdown-icon-item">
                                            <img src="medicalDashboard/assets/images/brands/dribbble.png"
                                                alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col">
                                        <a href="javascript: void(0);" class="dropdown-icon-item">
                                            <img src="medicalDashboard/assets/images/brands/dropbox.png" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript: void(0);" class="dropdown-icon-item">
                                            <img src="medicalDashboard/assets/images/brands/mail_chimp.png"
                                                alt="mail_chimp">
                                            <span>Mail Chimp</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript: void(0);" class="dropdown-icon-item">
                                            <img src="medicalDashboard/assets/images/brands/slack.png" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-lg-inline-flex ml-2">
                        <button type="button" data-toggle="fullscreen" class="btn header-item notify-icon"
                            id="full-screen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>
                    <div class="d-inline-flex ml-0 ml-sm-2 dropdown">
                        <button data-toggle="dropdown" aria-haspopup="true" type="button"
                            id="page-header-notification-dropdown" aria-expanded="false"
                            class="btn header-item notify-icon position-relative">
                            <i class="bx bx-bell bx-tada"></i>
                            <span class="badge badge-danger badge-pill notify-icon-badge">3</span>
                        </button>
                        <div aria-labelledby="page-header-notification-dropdown"
                            class="dropdown-menu-lg dropdown-menu-right p-0 dropdown-menu">
                            <div class="notify-title p-3">
                                <h5 class="font-size-14 font-weight-600 mb-0">
                                    <span>Notificaciones</span>
                                    <a class="text-primary" href="javascript: void(0);">
                                        <small>Limpiar todo</small>
                                    </a>
                                </h5>
                            </div>
                            <div class="notify-scroll">
                                <div class="scroll-content" id="notify-scrollbar">
                                    <div class="scroll-content">
                                        <a href="javascript:void(0);" class="dropdown-item notification-item">
                                            <div class="media">
                                                <div class="avatar avatar-xs bg-primary">
                                                    <i class="bx bx-user-plus"></i>
                                                </div>
                                                <p class="media-body">
                                                    Nueva cita asignada
                                                    <small class="text-muted">Hace 5 horas</small>
                                                </p>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notification-item">
                                            <div class="media">
                                                <div class="avatar avatar-xs">
                                                    <img alt="Lettstart Admin" class="img-fluid rounded-circle"
                                                        src="medicalDashboard/assets/images/users/avatar-2.jpg">
                                                </div>
                                                <p class="media-body">
                                                    Foto de perfil actualizada
                                                    <small class="text-muted">Foto aprobada por la inge Lorena</small>
                                                </p>
                                            </div>
                                        </a><a href="javascript:void(0);" class="dropdown-item notification-item">
                                            <div class="media">
                                                <div class="avatar avatar-xs bg-danger">
                                                    <i class="bx bx-server"></i>
                                                </div>
                                                <p class="media-body">
                                                    Servidor ca&iacute;do
                                                    <small class="text-muted">Algunos bugs detectados y
                                                        solucionados</small>
                                                </p>
                                            </div>
                                        </a><a href="javascript:void(0);" class="dropdown-item notification-item">
                                            <div class="media">
                                                <div class="avatar avatar-xs bg-info">
                                                    <i class="bx bx-tag"></i>
                                                </div>
                                                <p class="media-body">
                                                    Alguien le ha enviado un mensaje
                                                    <small class="text-muted">Hace 2 horas</small>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="notify-all">
                                    <a href="javascript: void(0);" class="text-primary text-center p-3">
                                        <small>Ver todo</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-inline-flex ml-0 ml-sm-2 dropdown">
                        <button data-toggle="dropdown" aria-haspopup="true" type="button"
                            id="page-header-profile-dropdown" aria-expanded="false" class="btn header-item">
                            <img src="medicalDashboard/assets/images/users/avatar-11.jpg" alt="Header Avatar"
                                class="avatar avatar-xs mr-0">
                            <span class="d-none d-xl-inline-block ml-1">{{Auth::user()->email}}</span>
                            <i class="bx bx-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div aria-labelledby="page-header-profile-dropdown" class="dropdown-menu-right dropdown-menu">
                            <a href="javascript: void(0);" class="dropdown-item">
                                <i class="bx bx-user mr-1"></i> Perfil
                            </a>
                            <a href="javascript: void(0);" class="dropdown-item">
                                <i class="bx bx-wrench mr-1"></i> Ajustes
                            </a>
                            <div class="dropdown-divider"></div>

                            <div class="dropdown-item">
                                
                            <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <input type="submit" value="Desconectarse" class="btn btn-danger">
                            </form>
                                    
                                
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- Begin Left Navigation -->
        <aside class="side-navbar">
            <div class="scroll-content" id="metismenu">
                <ul id="side-menu" class="metismenu list-unstyled">
                    <li class="side-nav-title side-nav-item menu-title">Menu</li>
                    <li>
                        <a href="javascript:void(0);" class="side-nav-link" aria-expanded="false">
                            <i class="bx bx-home-circle"></i>
                            <span> Dashboard</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul aria-expanded="false" class="nav-second-level">
                            <li class="side-nav-item">
                                <a class="side-nav-link" href="javascript:void()"> Accion 1 </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link" href="javascript:void()"> Accion 2 </a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link" href="javascript:void()"> Accion 3 </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="side-nav-link" aria-expanded="false">
                            <i class="bx bx-layout"></i>
                            <span> Reportes</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul aria-expanded="false" class="nav-second-level">
                            <li class="side-nav-item">
                                <a class="side-nav-link" href="javascript:void()"> Accion 1</a>
                            </li>
                            <li class="side-nav-item">
                                <a class="side-nav-link" href="javascript:void()"> Accion 2 </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void()" target="_blank" class="side-nav-link" aria-expanded="false">
                            <i class="bx bx-file"></i>
                            <span> Documentation</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Left Navigation End -->
        <!-- Left Navigation End -->
        <!-- Begin main content -->
        <div class="main-content">
            <!-- content -->
            <div class="page-content">
                <!-- page header -->
                <div class="page-title-box">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <div class="page-title">
                                    <h3 class="mb-1 font-weight-bold">Panel CMV</h3>
                                    <ol class="breadcrumb mb-3 mb-md-0">
                                        <li class="breadcrumb-item active">Bienvenido al panel de administracion</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm-8 col-xl-6">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- page content -->
                <div class="page-content-wrapper mt--45">
                    <div class="container-fluid">
                        <!-- Widget  -->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span
                                                    class="text-muted text-uppercase font-size-12 font-weight-bold">today
                                                    revenue</span>
                                                <h2 class="mb-0 mt-1">5000</h2>
                                            </div>
                                            <div class="text-center">
                                                <div id="t-rev"></div>
                                                <span class="text-success font-weight-bold font-size-13">
                                                    <i class="bx bx-up-arrow-alt"></i> 10.21%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span
                                                    class="text-muted text-uppercase font-size-12 font-weight-bold">today
                                                    orders</span>
                                                <h2 class="mb-0 mt-1">2000</h2>
                                            </div>
                                            <div class="text-center">
                                                <div id="t-order"></div>
                                                <span class="text-danger font-weight-bold font-size-13">
                                                    <i class="bx bx-down-arrow-alt"></i> 5.05%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span
                                                    class="text-muted text-uppercase font-size-12 font-weight-bold">new
                                                    users</span>
                                                <h2 class="mb-0 mt-1">800</h2>
                                            </div>
                                            <div class="text-center">
                                                <div id="t-user"></div>
                                                <span class="text-success font-weight-bold font-size-13">
                                                    <i class="bx bx-up-arrow-alt"></i> 25.21%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span
                                                    class="text-muted text-uppercase font-size-12 font-weight-bold">new
                                                    visitors</span>
                                                <h2 class="mb-0 mt-1">1500</h2>
                                            </div>
                                            <div class="text-center">
                                                <div id="t-visitor"></div>
                                                <span class="text-danger font-weight-bold font-size-13">
                                                    <i class="bx bx-down-arrow-alt"></i> 5.16%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row 2-->
                        <div class="row align-items-stretch">
                            <div class="col-md-4 col-lg-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Sales Status</h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item py-4">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Number of Sales</p>
                                                        <h4 class="mb-0">1,625</h4>
                                                    </div>
                                                    <div class="avatar avatar-md bg-info mr-0 align-self-center">
                                                        <i class="bx bx-layer fs-lg"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-4">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Sales Revenue </p>
                                                        <h4 class="mb-0">$ 42,235</h4>
                                                    </div>
                                                    <div class="avatar avatar-md bg-primary mr-0 align-self-center">
                                                        <i class="bx bx-bar-chart-alt fs-lg"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-4">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Product Sold</p>
                                                        <h4 class="mb-0">8,235</h4>
                                                    </div>
                                                    <div class="avatar avatar-md bg-success mr-0 align-self-center">
                                                        <i class="bx bx-chart fs-lg"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Begin total revenue chart -->
                            <div class="col-md-8 col-lg-9">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Statistics</h5>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div id="stats-chart"></div>
                                    </div>
                                </div>
                            </div> <!-- End total revenue chart -->
                        </div>
                        <!-- Row 3-->
                        <div class="row">
                            <!-- Begin recent orders -->
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header dflex-between-center">
                                        <h5 class="card-title">Recent Orders</h5>
                                        <div class="export-fnc">
                                            <button class="btn btn-primary btn-sm mr-3 ml-1" data-effect="wave">
                                                <i class="bx bx-export"></i> Export
                                            </button>
                                            <div class="arrow-pagination">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item disabled"><a class="page-link"
                                                            data-effect="wave" href="javascript:void(0)"><i
                                                                class="bx bx-chevron-left"></i></a></li>
                                                    <li class="page-item"><a class="page-link" data-effect="wave"
                                                            href="javascript:void(0)"><i
                                                                class="bx bx-chevron-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Product</th>
                                                        <th>Customer</th>
                                                        <th>Price</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#1</td>
                                                        <td>Bicycle</td>
                                                        <td>Otto B</td>
                                                        <td>$124</td>
                                                        <td><span class="badge py-1 badge-soft-danger">Declined</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#2</td>
                                                        <td>Addidas Shoes</td>
                                                        <td>Danny Johnson</td>
                                                        <td>$100</td>
                                                        <td><span class="badge py-1 badge-soft-warning">Pending</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#3</td>
                                                        <td>Cut Sleeve Jacket</td>
                                                        <td>Alvin Newton</td>
                                                        <td>$50</td>
                                                        <td><span class="badge py-1 badge-soft-success">Delivered</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#4</td>
                                                        <td>Half Shirt</td>
                                                        <td>Bennie Perez</td>
                                                        <td>$80</td>
                                                        <td><span class="badge py-1 badge-soft-success">Delivered</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End recent orders -->
                            <!-- Begin quarter sale -->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Quartly Sale</h5>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div id="quartly-sale"></div>
                                    </div>
                                </div>
                            </div><!-- End quarter sale -->
                        </div>
                        <!-- Row 4-->
                        <div class="row">
                            <!-- Begin total sales chart -->
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Total Sales</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-container">
                                            <div class="chart">
                                                <canvas id="total-sale"></canvas>
                                            </div>
                                            <div class="center-text">
                                                <p class="text-muted mb-1 font-weight-600">Total Sale </p>
                                                <h4 class="mb-0 font-weight-bold">130</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End total sales chart -->
                            <!-- Begin earning chart -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header dflex-between-center">
                                        <h5 class="card-title">Earning Statastics</h5>
                                        <div class="btn-group earningTabs">
                                            <button class="btn btn-primary btn-sm" data-effect="wave"
                                                data-type="weekly">
                                                Weekly
                                            </button>
                                            <button class="btn btn-outline-primary btn-sm" data-effect="wave"
                                                data-type="monthly">
                                                Monthly
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div id="sales-order"></div>
                                    </div>
                                </div>
                            </div><!-- End earning chart -->
                            <!-- Begin today sale -->
                            <div class="col-lg-3">
                                <div class="card revenue-card">
                                    <div class="card-header bg-info">
                                        <h5 class="card-title text-white">Revenue</h5>
                                    </div>
                                    <div class="card-body bg-info position-relative">
                                        <div class="chart-container">
                                            <div class="chart h-150">
                                                <canvas id="today-revenue"></canvas>
                                            </div>
                                        </div>
                                        <div class="center-text">
                                            <p class="text-light mb-1 font-weight-600">Sale </p>
                                            <h4 class="text-white mb-0 font-weight-bold">$600</h4>
                                        </div>
                                    </div>
                                    <div class="revenue-stats p-4">
                                        <div>
                                            <p class="text-muted">Target</p>
                                            <h4>$2000</h4>
                                        </div>
                                        <div>
                                            <p class="text-muted">Current</p>
                                            <h4>$1500</h4>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End today sale -->
                        </div>
                        <!-- Row 5 -->

                    </div>
                </div>
            </div>
        </div>
        <!-- main content End -->
        <!-- footer -->
        <!-- footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 mb-1 mb-md-0">
                        <span>2021 &copy; CMV</span>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <span>Todos los derechos reservados.</span>
                    </div>
                </div>
            </div>
        </footer>


    </div>
    <!-- Page End -->
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="medicalDashboard/assets/js/vendor.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="medicalDashboard/assets/libs/flatpicker/js/flatpickr.js"></script>
    <script src="medicalDashboard/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="medicalDashboard/assets/libs/chartjs/js/Chart.bundle.min.js"></script>
    <script src="medicalDashboard/assets/js/utils/colors.js"></script>
    <script src="medicalDashboard/assets/js/pages/dashboard.init.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    <!-- ================== BEGIN PAGE JS ================== -->
    <script src="medicalDashboard/assets/js/app.js"></script>
    <!-- ================== END PAGE JS ================== -->
</body>

</html>