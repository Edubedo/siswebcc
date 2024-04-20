<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>SPEC - Coffee Shop HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <link href="img/favicon.ico" rel="icon">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="css/style.min.css" rel="stylesheet">
</head>     


<body>
    <!-- Navbar Start -->
    <?php include("./templates/header.php");
?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="mb-5 container-fluid page-header position-relative overlay-bottom">
        <div class="pt-0 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 400px">
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Services</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="px-2 m-0 text-white">/</p>
                <p class="m-0 text-white">Services</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="pt-5 container-fluid">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Nuestros servicios</h4>
                <h1 class="display-4">Tipos de servicios</h1>
            </div>
            <div class="row">
                <div class="mb-5 col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="mb-3 img-fluid mb-sm-0" src="img/impresora1.jpeg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Impresiones y copias</h4>
                            <p class="m-0">Tenemos impresiones y copias a color y blanco y negro , las impresiones a color tienen un costo de 2 pesos y blanco y negro tiene un costo de 1 peso.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-5 col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="mb-3 img-fluid mb-sm-0" src="img/dellroja1.jpeg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fas fa-print service-icon"></i>Prestamo de equipos de computo </h4>
                            <p class="m-0">Tenemos equipos de computo para prestar siempre y cuando cuides el equipos</p>
                        </div>
                    </div>
                </div>
                <div class="mb-5 col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="mb-3 img-fluid mb-sm-0" src="img/proyector1.jpeg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>Prestamo de proyectores</h4>
                            <p class="m-0">Pregunta por disponibilidad con el encargado</p>
                        </div>
                    </div>
                </div>
                <div class="mb-5 col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="mb-3 img-fluid mb-sm-0" src="img/bocina1.jpeg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fas fa-volume up"></i>Prestamo de bocina</h4>
                            <p class="m-0">Pregunta por disponibilidad con el encargado</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


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