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

    <!-- Carousel Inicio -->
    <div class="p-0 mb-5 container-fluid">
    <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/udc.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="m-0 text-white font-weight-medium">Sistema de control</h2>
                    <h1 class="m-0 display-1 text-primary">CENTRO DE COMPUTO</h1>
                    <h2 class="m-0 text-white">Universidad de Colima</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/UDC5.jfif" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="m-0 text-white font-weight-medium">Sistema de control</h2>
                    <h1 class="m-0 display-1 text-primary">CENTRO DE COMPUTO</h1>
                    <h2 class="m-0 text-white">Universidad de Colima</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
    <!-- Carousel Fin -->
  <!-- Servicios Inicio -->
  <?php include("./templates/views/servicios.php");?>
    <!-- Servicios Fin -->

    
    <!-- Reseñas Inicio -->
    <?php include("./templates/views/resenas.php");?>
    <!-- Reseñas Fin -->


<!-- Equipos Computo Inicio -->
<?php include("./templates/views/equipos-computo.php");?>
    <!-- Equipos Computo Fin -->

       <!-- Contacto Inicio -->
       <?php include("./templates/views/contacto.php");?>
    <!-- Contacto Fin -->

 <!-- Empleados Inicio -->
 <?php include("./templates/views/empleados.php");?>
    <!-- Empleados Fin -->

    <!-- Footer Inicio -->
    <?php include("./templates/footer.php");?>    <!-- Footer Fin -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
       <?php include("./templates/librerias-js.php");?>

</body>

</html>