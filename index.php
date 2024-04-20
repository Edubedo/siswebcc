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
    <?php include("./templates/components/carousel.php");?>
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