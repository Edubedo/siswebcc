<!DOCTYPE html>
<html lang="es">

<head>
<title>Reseñas | Sistema de prestamo de equipos de computo</title>
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
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Reseñas</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="index.php">P&aacute;gina Principal</a></p>
                <p class="px-2 m-0 text-white">/</p>
                <p class="m-0 text-white">Reseñas</p>
            </div>
        </div>
    </div>
    <!-- Page Header Fin -->


    <!-- Testimonial Inicio -->
    <div class="py-5 container-fluid">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Reseñas </h4>
                <h1 class="display-4">Lo que piensan los Estudiantes</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="mb-3 d-flex align-items-center">
                        <img class="img-fluid" src="mario.jpeg" alt="">
                        <div class="ml-3">
                            <h4>Mario Figueroa</h4>
                            <i>Estudiante 6B / Gymrat Natural? </i>
                        </div>
                    </div>
                    <p class="m-0">Muy buen servicio aunque podrian mejorar en la renovacion de equipos para el uso de los estudiantes. Pd: Arriba Xavi</p>
                </div>
                <div class="testimonial-item">
                    <div class="mb-3 d-flex align-items-center">
                        <img class="img-fluid" src="alan.jpeg" alt="">
                        <div class="ml-3">
                            <h4>Alan Palomares</h4>
                            <i>Estudiante 6B / Dulcero Profesional</i>
                        </div>
                    </div>
                    <p class="m-0">El Equipo que me dieron vino sin el cargador e iba bastante lenta. 1 Bubaloo a $2 y 2 a $5</p>
                </div>
                <div class="testimonial-item">
                    <div class="mb-3 d-flex align-items-center">
                        <img class="img-fluid" src="kevin.jpeg" alt="">
                        <div class="ml-3">
                            <h4>Kevin Valdovinos</h4>
                            <i>Estudiante 6B / Racista de Medio Tiempo</i>
                        </div>
                    </div>
                    <p class="m-0">Muy facil y rapido de pedir una compu prestada para hacer mis actividades. Pd: No me hables en ese tono ... de Piel </p>
                </div>
                <div class="testimonial-item">
                    <div class="mb-3 d-flex align-items-center">
                        <img class="img-fluid" src="edu.jpeg" alt="">
                        <div class="ml-3">
                            <h4>Eduardo Escobedo</h4>
                            <i>Estudiante 6B / Programador</i>
                        </div>
                    </div>
                    <p class="m-0">Muy buen sistema para prestamos de Equipos, se nota que lo hice yo.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Fin -->


    <!-- Footer Inicio -->
    <?php include("./templates/footer.php");?>
    <!-- Footer Fin -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
       <?php include("./templates/librerias-js.php");?>

</body>

</html>