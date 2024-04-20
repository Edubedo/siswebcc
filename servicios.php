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
    <!-- Navbar Inicio -->
    <?php include("./templates/header.php");
?>
    <!-- Navbar Fin -->


    <!-- Page Header Inicio -->
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
    <!-- Page Header Fin -->


    <!-- Servicios Inicio -->
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
    <!-- Servicios Fin -->


    <!-- Footer Inicio -->
    <?php include("./templates/footer.php");?>
    <!-- Footer Fin -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <?php include("./templates/librerias-js.php");?>

</body>

</html>