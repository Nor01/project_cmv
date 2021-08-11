<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="descriptison" content="Healthcare, Medical, Hospital Responsive Html5 One Page Template">

    <meta name="keywords"
        content="healthcare, medical, hospital, doctor, bootstrap, creative, landing page, multipurpose, product, responsive, clinic template">

    <meta name="author" content="Mainor Aguilar">

    <!-- Site Title -->

    <title>CMV | Centro M&eacute;dico</title>

    <!-- Site Favicon -->

    <link rel="shortcut icon" href="medicalIndex/images/favicon.ico" type="image/ico">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="medicalIndex/css/bootstrap.min.css">

    <!-- Icofont Icons -->

    <link rel="stylesheet" href="medicalIndex/css/icofont.min.css">

    <!-- Carousel Slider -->

    <link rel="stylesheet" href="medicalIndex/css/owl.carousel.css">

    <!-- Google Fonts -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap"
        type="text/css">

    <!-- Animate CSS -->

    <link rel="stylesheet" href="medicalIndex/css/animate.css">

    <!-- Custom  CSS -->

    <link rel="stylesheet" href="medicalIndex/css/style.css">

    <!-- Styles -->
    
</head>

<body class="antialiased">
    <div>
        <!-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif -->


<!--Start Navbar-->

<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">

<div class="container">

    <!-- LOGO -->

    <a class="navbar-brand brand-logo mr-4" href="index.html">

        <img src="medicalIndex/images/logo.png" class="img-fluid logo-light" alt="">

        <img src="medicalIndex/images/logo-dark.png" class="img-fluid logo-dark" alt="">

    </a>

    <div class="navbar-collapse collapse justify-content-center" id="navbarCollapse">

        <ul class="navbar-nav navbar-center" id="mySidenav">

            <li class="nav-item active">

                <a href="#home" class="nav-link">Inicio</a>

            </li>

            <li class="nav-item">

                <a href="#features" class="nav-link">Servicios</a>

            </li>

            <li class="nav-item">

                <a href="#aboutus" class="nav-link">Nosotros</a>

            </li>

            <!-- <li class="nav-item">

                <a href="#departments" class="nav-link">Departmentos</a>

            </li> -->

            <!-- <li class="nav-item">

                <a href="#our-team" class="nav-link">Nuestro Equipo</a>

            </li> -->

            <li class="nav-item">

                <a href="#premises" class="nav-link">Locales</a>

            </li>

            <li class="nav-item">

                <a href="#faq" class="nav-link">FAQ's</a>

            </li>

            <li class="nav-item">

                <a href="#appointment" class="nav-link">Cita</a>

            </li>

        </ul>

    </div>

    <div class="contact_btn">

        <a href="{{ route('login') }}" class="btn btn-sm">INGRESAR</a>

        <button class="navbar-toggler ml-2 p-0" type="button" data-toggle="collapse"
            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">

            <i class="icofont-navigation-menu"></i>

        </button>

    </div>

</div>

</nav>

<!-- End Navbar -->

<!-- Home Start-->

<section class="bg-gradient overflow-hidden home-section" id="home">

<div class="waves-bg home-bg">

    <div class="container">

        <div class="owl-carousel owl-theme home-slider">

            <div class="item">

                <div class="row align-items-center">

                    <div class="col-md-6">

                        <div class="content-fadeInUp">

                            <h2 class="heading">

                                Bienvenido a CMV

                            </h2>

                            <h1 class="text-white sub-title">El mejor cuidado & Mejores Doctores</h1>

                            <p class="para-sec">

                            Una mejor atención médica con un costo eficiente es el enfoque principal de nuestro centro m&eacute;dico. 
                            

                            </p>

                            <div class="learn-more">

                                <a href="#aboutus" class="btn btn-white btn-rounded text-white">Seguir leyendo</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="img-fadeInRight">

                            <img src="medicalIndex/images/slider-img/banner-img-01.png" class="img-fluid" alt="">

                        </div>

                    </div>

                </div>

            </div>

            <div class="item">

                <div class="row align-items-center">

                    <div class="col-md-6">

                        <div class="content-fadeInUp">

                            <h2 class="heading">

                            Bienvenido a CMV

                            </h2>

                            <p class="para-sec">

                            La vida de su familia es nuestra prioridad. 

                            </p>

                            <div class="learn-more">

                                <a href="#aboutus" class="btn btn-white btn-rounded text-white">Seguir leyendo</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="img-fadeInRight">

                            <img src="medicalIndex/images/slider-img/banner-img-01.png" class="img-fluid" alt="">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="hero-waves">

        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">

            <defs></defs>

            <path id="wave1" d="" />

        </svg>

        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">

            <defs></defs>

            <path id="wave2" d="" />

        </svg>

    </div>

</div>

</section>

<!-- Home End -->

<!-- Features Start -->

<section id="features" class="section features">

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="section-title text-center mb-4">

                <h2>Nuestros servicios</h2>

                <p class="section-subtitle mx-auto">Nuestra propuesta es brindarte todo lo que necesites en un solo lugar, estamos adquiriendo nuevos servicios para el beneficio y comodidad de todos nuestros pacientes.</p>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-4">

            <div class="ftr-icon-box wow fadeInUp">

                <div class="icon"><i class="icofont-stretcher"></i></div>

                <h4 class="title">Cuidados de emergencia</h4>

                <p class="description">Atención de emergencias no vitales en dos de nuestras principales sedes a nivel nacional, salas altamente equipadas para atenderte 24/7.</p>

            </div>

        </div>

        <div class="col-md-4">

            <div class="ftr-icon-box wow fadeInUp" data-wow-delay="0.3s">

                <div class="icon"><i class="icofont-doctor"></i></div>

                <h4 class="title">Doctores calificados</h4>

                <p class="description">Doctores altamente calificados atender&aacute;n a todas sus consultas.</p>

            </div>

        </div>

        <div class="col-md-4">

            <div class="ftr-icon-box wow fadeInUp" data-wow-delay="0.6s">

                <div class="icon"><i class="icofont-wall-clock"></i></div>

                <h4 class="title">Horas de servicio 24/7</h4>

                <p class="description">Nuestro equipo est&aacute; disponible 24/7 para resolver cualquier emergencia m&eacute;dica.</p>

            </div>

        </div>

    </div>

</div>

</section>

<!-- Features End -->

<!-- About Us Start -->

<section id="aboutus" class="aboutus section inverse-bg">

<div class="container">

    <div class="row">

        <div class="col-md-7">

            <div class="mb-30">

                <div class="section-title mb-4">

                    <h4 class="sub-title">Nosotros</h4>

                    <h2>30 años en experiencia m&eacute;dica</h2>

                    <p>This is simply dummy text of the printing and typesetting industry has been the
                        industry's standard dummy text ever since the been when an unknown printer. This is
                        simply dummy text of the printing and type setting industry.</p>

                </div>

                <div class="icon-boxes">

                    <div class="aboutus-icon-box d-flex align-items-start">

                        <div class="icon"><i class="icofont-users-alt-2"></i></div>

                        <div class="ml-4">

                            <h4 class="title">Equipo Profesional</h4>

                            <p class="description">This is simply dummy text of the printing and typesetting
                                industry has been the industry's standard dummy text ever since</p>

                        </div>

                    </div>

                    <div class="aboutus-icon-box d-flex align-items-start">

                        <div class="icon"><i class="icofont-checked"></i></div>

                        <div class="ml-4">

                            <h4 class="title">98% en tasa de &eacute;xito</h4>

                            <p class="description">This is simply dummy text of the printing and typesetting
                                industry has been the industry's standard dummy text ever since</p>

                        </div>

                    </div>

                    <div class="aboutus-icon-box d-flex align-items-start">

                        <div class="icon"><i class="icofont-excavator"></i></div>

                        <div class="ml-4">

                            <h4 class="title">Equipo moderno</h4>

                            <p class="description">This is simply dummy text of the printing and typesetting
                                industry has been the industry's standard dummy text ever since</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-5">

            <img src="medicalIndex/images/aboutus/about-doc-img.jpg" alt="" class="w-100 mb-30">

        </div>

    </div>

</div>

</section>


<!--Start Premises-->

<section class="section inverse-bg" id="premises">

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="section-title text-center mb-4">

                <h2>Instalaciones y locales</h2>

                <p class="section-subtitle mx-auto">Equipo tecnol&oacute;gico de primera.</p>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-12">

            <div class="owl-carousel owl-theme premises-slider">

                <div class="item">

                    <div class="premises-box">

                        <img src="medicalIndex/images/premises/01.jpg" alt="">

                    </div>

                </div>

                <div class="item">

                    <div class="premises-box">

                        <img src="medicalIndex/images/premises/02.jpg" alt="">

                    </div>

                </div>

                <div class="item">

                    <div class="premises-box">

                        <img src="medicalIndex/images/premises/03.jpg" alt="">

                    </div>

                </div>

                <div class="item">

                    <div class="premises-box">

                        <img src="medicalIndex/images/premises/04.jpg" alt="">

                    </div>

                </div>

                <div class="item">

                    <div class="premises-box">

                        <img src="medicalIndex/images/premises/05.jpg" alt="">

                    </div>

                </div>

                <div class="item">

                    <div class="premises-box">

                        <img src="medicalIndex/images/premises/06.jpg" alt="">

                    </div>

                </div>

                <div class="item">

                    <div class="premises-box">

                        <img src="medicalIndex/images/premises/07.jpg" alt="">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</section>

<!--End Premises-->

<!-- Start Appointment -->

<section id="appointment" class="p-0">

<div class="appointment">

    <div class="row no-gutters">

        <div class="col-md-5">

            <div class="contant-number">

                <h3><i class="icofont-phone"></i> +504-1234-CMV-10</h3>

            </div>

        </div>

        <div class="col-md-7">

            <div class="appointment-form">

                <h2 class="title">Hacer una cita</h2>

                <form>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <input type="text" class="form-control" id="id_name" placeholder="Nombre Completo">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <input type="email" class="form-control" id="id_email" placeholder="Correo">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <input type="text" class="form-control" id="id_phone_number"
                                    placeholder="Celular">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <input class="form-control" type="date" id="datepicker" placeholder="Fecha de cita">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <select class="form-control">

                                    <option>Departamento</option>

                                    <option>Cardiology</option>

                                    <option>Neurology</option>

                                    <option>Orthopedics</option>

                                    <option>Surgery</option>

                                    <option>Urology</option>

                                    <option>Dental</option>

                                </select>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <select class="form-control">

                                    <option>Doctor</option>

                                    <option>Dr. Anym Jackson</option>

                                    <option>Dr. Mark Jacobson</option>

                                    <option>Dr. Alex Davidson</option>

                                    <option>Dr. Jaka Alex</option>

                                </select>

                            </div>

                        </div>

                    </div>

                    <div class="form-group">

                        <textarea class="form-control" rows="4" placeholder="Mensaje"></textarea>

                    </div>

                    <button type="submit" class="btn book-now-btn">Agendar Ahora</button>

                </form>

            </div>

        </div>

    </div>

</div>

</section>

<!-- End Appointment -->

<!-- Start FAQ's -->

<section id="faq" class="section">

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="section-title text-center mb-4">

                <h2>Preguntas Frecuentes</h2>

                <p class="section-subtitle mx-auto">Esta es nuestra secci&oacute;n de preguntas frecuentes</p>

            </div>

        </div>

    </div>

    <div class="row align-items-center">

        <div class="col-md-7">

            <div id="accordion" class="faq-panel wow fadeInUp" data-wow-duration="1500ms">

                <div class="question-box shadow-sm active">

                    <div class="faq-header p-0" id="headingOne">

                        <h4 class="mb-0">

                            <button class="btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne"><span>1. Lorem Ipsum Dolor
                                    Sit?</span><span><i
                                        class="icofont-rounded-down caret-icon"></i></span></button>

                        </h4>

                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordion">

                        <div class="faq-body">

                            <p>

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo

                                consequat.

                            </p>

                        </div>

                    </div>

                </div>

                <div class="question-box shadow-sm">

                    <div class="faq-header p-0" id="headingTwo">

                        <h4 class="mb-0">

                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo"><span>2. Amet Consectetur
                                    Adipisicing?</span><span><i
                                        class="icofont-rounded-down caret-icon"></i></span></button>

                        </h4>

                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordion">

                        <div class="faq-body">

                            <p>

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo

                                consequat.

                            </p>

                        </div>

                    </div>

                </div>

                <div class="question-box shadow-sm">

                    <div class="faq-header p-0" id="headingThree">

                        <h4 class="mb-0">

                            <button class="btn-link collapsed" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree"><span>3. Elit Sed Do Eiusmo?</span><span><i
                                        class="icofont-rounded-down caret-icon"></i></span></button>

                        </h4>

                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordion">

                        <div class="faq-body">

                            <p>

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo

                                consequat.

                            </p>

                        </div>

                    </div>

                </div>

                <div class="question-box shadow-sm">

                    <div class="faq-header p-0" id="headingFour">

                        <h4 class="mb-0">

                            <button class="btn-link collapsed" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour"><span>4. Ea Commodo Consequat?</span><span><i
                                        class="icofont-rounded-down caret-icon"></i></span></button>

                        </h4>

                    </div>

                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordion">

                        <div class="faq-body">

                            <p>

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo

                                consequat.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-5">

            <div class="wow fadeIn" data-wow-duration="1500ms">

                <img src="medicalIndex/images/faq.svg" class="w-100" alt="">

            </div>

        </div>

    </div>

</div>

</section>

        
    </div>

    


    <!-- Start Footer -->

    <footer class="footer bg-gradient overflow-hidden pb-4" id="footer">

        <div class="container footer-top mb-4">

            <div class="row">

                <div class="col-md-12">

                    <div class="section-title text-center mb-4">

                        <h2 class="text-white">Suscribase a nuestro bolet&iacute;n</h2>

                        <p class="text-white section-subtitle mx-auto">Puede cancelar su suscripci&oacute;n en cualquier momento.</p>

                    </div>

                </div>

            </div>

            <div class="row justify-content-center">

                <div class="col-md-5">

                    <div class="footer-newsletter">

                        <form action="#" method="post">

                            <input type="email" name="email"><input type="submit" value="Suscribirse">

                        </form>

                    </div>

                </div>

            </div>

        </div>

        <div class="container footer-bottom">

            <div class="row">

                <div class="col-md-4">

                    <div class="foot-logo">

                        <img src="medicalIndex/images/logo.png" class="mt-2" alt="">

                    </div>

                    <p class="mt-4 text-left ftr-about">Cuidar de tu bienestar personal y de tu familia, brindándote la mejor atención, buscando siempre compartir los momentos más importantes de tu vida.</p>

                    <div class="mt-4">

                        <ul class="footer-social list-inline mt-4">

                            <li class="list-inline-item"><a href="#" class="social-icon"><i
                                        class="icofont-facebook"></i></a></li>

                            <li class="list-inline-item"><a href="#" class="social-icon"><i
                                        class="icofont-twitter"></i></a></li>

                            <li class="list-inline-item"><a href="#" class="social-icon"><i
                                        class="icofont-instagram"></i></a></li>

                            <li class="list-inline-item"><a href="#" class="social-icon"><i
                                        class="icofont-linkedin"></i></a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-md-2 col-sm-4">

                    <h5 class="footer-title">Accesos R&aacute;pidos</h5>

                    <ul class="footer-menu list-unstyled mb-0 mt-4">

                        <li><a href="javascript:void()">Inicio</a></li>

                        <li><a href="javascript:void()">Servicios</a></li>

                        <li><a href="javascript:void()">Nosotros</a></li>

                        <li><a href="javascript:void()">Locales</a></li>

                        

                    </ul>

                </div>

                <div class="col-md-2 col-sm-4">

                    <h5 class="footer-title">Accesos &Uacute;tiles</h5>

                    <ul class="footer-menu list-unstyled mb-0 mt-4">

                        <li><a href="javascript:void()">FAQ's</a></li>

                        <li><a href="javascript:void()">Cita</a></li>

                    </ul>

                </div>

                <div class="col-md-4 col-sm-4">

                    <h5 class="footer-title">Contacto R&aacute;pido</h5>

                    <ul class="footer-menu list-unstyled mb-0 mt-4 contact-menu-list">

                        <li>

                            <i class="icofont-location-pin"></i>

                            <a href="https://www.google.com/maps">

                            Col. Moderna, San Pedro Sula,

                                Cort&eacute;s, 21101, Honduras

                            </a>

                        </li>

                        <li><i class="icofont-envelope"></i><a href="mailto:info@yourdomain.com"> info@cmv.com</a>
                        </li>

                        <li><i class="icofont-phone"></i><a href="tel:+12345678910"> +504 234 CMV 8910</a></li>

                    </ul>

                </div>

                <div class="col-md-12">

                    <div class="footer-desc mt-4 pt-4">

                        <p class="mb-0 text-center">2021 &copy; <span
                                class="text-white font-weight-bold">CMV.</span> Todos los derechos reservados.</p>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <!-- End Footer -->

    <!-- Back To Top -->

    <a href="#" class="back_top"> <i class="icofont-rounded-up"></i></a>

    <!-- Javascript -->

    <script src="medicalIndex/js/jquery.min.js"></script>

    <script src="medicalIndex/js/popper.min.js"></script>

    <script src="medicalIndex/js/bootstrap.min.js"></script>

    <script src="medicalIndex/js/jquery.easing.min.js"></script>

    <script src="medicalIndex/js/owl.carousel.min.js"></script>

    <script src="medicalIndex/js/parallax.js"></script>

    <script src="medicalIndex/js/wow.min.js"></script>

    <script src="medicalIndex/js/TweenMax.min.js"></script>

    <script src="medicalIndex/js/wavify.js"></script>

    <!-- Main Js   -->

    <script src="medicalIndex/js/main.js"></script>

</body>

</html>