<!DOCTYPE html>
<html lang="es">

<head>
    <title>SPEC | Sistema de prestamo de equipos de computo</title>
    <!-- Meta -->
    <?php include("./templates/etiquetas-meta.php"); ?>
    <!-- Icono -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Rel Bootstrap -->
    <?php include("./templates/librerias-head.php"); ?>
    <!-- Estilos -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="p-0 container-fluid nav-bar">
        <nav class="py-3 navbar navbar-expand-lg bg-none navbar-dark">
            <a href="index.php" class="m-0 navbar-brand px-lg-4">
                <h1 class="m-0 text-white display-4 text-uppercase">SPEC</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="p-4 ml-auto navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="menu.html" class="nav-item nav-link active">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="reservation.html" class="dropdown-item">Reservation</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="mb-5 container-fluid page-header position-relative overlay-bottom">
        <div class="pt-0 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 400px">
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Menu</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">P&aacute;gina Principal</a></p>
                <p class="px-2 m-0 text-white">/</p>
                <p class="m-0 text-white">Menu</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Menu Start -->
    <div class="pt-5 container-fluid">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu de los Equipos</h4>
                <h1 class="display-4">Equipos de Comput&oacute;</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Disponibles </h1>
                    <div class="mb-5 row align-items-center">
                        <div class="col-4 col-sm-3">
                            <img class="mb-3 w-100 circle mb-sm-0" src="dell roja.jpg" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Laptop Dell Roja</h4>
                            <p class="m-0">La laptop Dell roja es un dispositivo llamativo que combina un diseño elegante con un rendimiento confiable.</p>
                        </div>
                    </div>
                    <div class="mb-5 row align-items-center">
                        <div class="col-4 col-sm-3">
                            <img class="mb-3 w-100 circle mb-sm-0" src="lenovo negra opaco.jpg" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Laptop Lenovo Negra Opaco</h4>
                            <p class="m-0">La laptop Lenovo Negra Opaco es un dispositivo elegante y versátil, diseñado para ofrecer un rendimiento confiable en un formato compacto.  </p>
                        </div>
                    </div>
                    <div class="mb-5 row align-items-center">
                        <div class="col-4 col-sm-3">
                            <img class="mb-3 w-100 circle mb-sm-0" src="lenovo negra.jpg" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Laptop Lenovo Color Negro</h4>
                            <p class="m-0">
                                La laptop Lenovo de color negro es una opción clásica y elegante para aquellos que buscan un dispositivo confiable y funcional. Con un diseño atemporal, esta laptop ofrece un equilibrio perfecto entre estilo y rendimiento. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">No Disponibles / Reparaci&oacute;n</h1>
                    <div class="mb-5 row align-items-center">
                        <div class="col-4 col-sm-3">
                            <img class="mb-3 w-100 circle mb-sm-0" src="laptop abierta 3.jpg" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Laptop Huawei MateBook D15</h4>
                            <p class="m-0">La laptop Huawei MateBook D15 es una opción moderna y sofisticada para usuarios que buscan estilo y rendimiento en un solo dispositivo</p>
                        </div>
                    </div>
                    <div class="mb-5 row align-items-center">
                        <div class="col-4 col-sm-3">
                            <img class="mb-3 w-100 circle mb-sm-0" src="compu abierta" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Laptop Acer Chromebook 315</h4>
                            <p class="m-0">La laptop Acer Chromebook 315 es una opción moderna y eficiente para aquellos que buscan simplicidad y rendimiento en un dispositivo portátil.</p>
                        </div>
                    </div>
                    <div class="mb-5 row align-items-center">
                        <div class="col-4 col-sm-3">
                            <img class="mb-3 w-100 circle mb-sm-0" src="compu blanca.jpg" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Microsoft Surface Pro 6</h4>
                            <p class="m-0">
                                La Microsoft Surface Pro 6 es una tablet convertible en laptop que combina elegancia y rendimiento en un dispositivo versátil. Con un diseño delgado y moderno, esta Surface Pro ofrece la portabilidad de una tablet con la potencia de una laptop.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Footer Start -->
    <?php include("./templates/footer.php");?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>