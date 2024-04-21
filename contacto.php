<!DOCTYPE html>
<html lang="es">

<head>
<head>
    <title>Contacto | Sistema de prestamo de equipos de computo</title>
    <!-- Meta -->
    <?php include("./templates/etiquetas-meta.php"); ?>
    <!-- Icono -->
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
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


    <!-- Página Encabezado Inicio -->
    <div class="mb-5 container-fluid page-header position-relative overlay-bottom">
        <div class="pt-0 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 400px">
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Contacto</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Inicio</a></p>
                <p class="px-2 m-0 text-white">/</p>
                <p class="m-0 text-white">Contacto</p>
            </div>
        </div>
    </div>
    <!-- Página Encabezado Fin -->


    <!-- Contacto Inicio -->
    <?php include("./templates/views/contacto.php");?>
    <!-- Contacto Fin -->


      <!-- Footer Inicio -->
      <?php include("./templates/footer.php");?>
    <!-- Footer Fin -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
       <?php include("./templates/librerias-js.php");?>

</body>

</html>