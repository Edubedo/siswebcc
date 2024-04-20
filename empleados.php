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
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Acerca de Nosotros</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="index.php">P&aacute;gina Principal</a></p>
                <p class="px-2 m-0 text-white">/</p>
                <p class="m-0 text-white">Sobre nosotros</p>
            </div>
        </div>
    </div>
    <!-- Page Header Fin -->


    <!-- About Inicio -->
    <div class="py-5 container-fluid">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sobre los Encargados Del Centro de Computaci&oacute;n</h4>
                <h1 class="display-4">Equipo de trabajo</h1>
            </div>
            <div class="col-lg-6">
                <div class="mb-5 row align-items-center">
                    <div class="col-4 col-sm-3">
                        <img class="mb-3 w-100 rounded-circle mb-sm-0" src="logo udc.jpg" alt="">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Miriam Silvestre</h4>
                        <p class="m-0">Encargada del Centro de Computaci&oacute;n del Turno Matutino del Bachillerato 8.
                        </p>
                    </div>
                </div>
                
                <div class="mb-5 row align-items-center">
                    <div class="col-4 col-sm-3">
                        <img class="mb-3 w-100 rounded-circle mb-sm-0" src="logo udc.jpg" alt="">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Carlos Barraza</h4>
                        <p class="m-0">Auxiliar en Servicio del Centro de Computaci&oacute;n del Turno Vespertino del Bachillerato 9.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- About Fin -->


    <!-- Footer Inicio -->
    <?php include("./templates/footer.php");?>
    <!-- Footer Fin -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
       <?php include("./templates/librerias-js.php");?>

</body>

</html>