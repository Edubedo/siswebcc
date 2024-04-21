<!DOCTYPE html>
<html lang="es">

<head>
    <title>Inicio | Sistema de prestamo de equipos de computo</title>
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

    <!-- Carousel Inicio -->
    <?php include("./templates/components/carousel.php"); ?>

    <!-- Carousel Fin -->

    <!-- Servicios Inicio -->
    <div class="section-title">
        <h2 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios</h2>
        <?php include("./templates/views/servicios.php"); ?>
    </div>
    <!-- Servicios Fin -->



    <!-- Equipos Computo Inicio -->
    <div class="section-title">
        <h2 class="text-primary text-uppercase" style="letter-spacing: 5px;">Equipos de Computo</h2>
        <?php include("./templates/views/equipos-computo.php"); ?>
    </div>
    <!-- Equipos Computo Fin -->

    <!-- Contacto Inicio -->
    <div class="section-title">
        <h2 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contactanos</h2>
        <?php include("./templates/views/contacto.php"); ?>
    </div>
    <!-- Contacto Fin -->

    <!-- Empleados Inicio -->
    <div class="section-title">
        <h2 class="text-primary text-uppercase" style="letter-spacing: 5px;">Equipos de Computo</h2>
        <?php include("./templates/views/empleados.php"); ?>
    </div>
    <!-- Empleados Fin -->

    <!-- Comentarios Inicio -->
    <div class="section-title">
        <h2 class="text-primary text-uppercase" style="letter-spacing: 5px;">Comentarios</h2>
        <?php include("./templates/views/comentarios.php"); ?>
    </div>
    <!-- Comentarios Fin -->

    <!-- Footer Inicio -->
    <?php include("./templates/footer.php"); ?> <!-- Footer Fin -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/cardDeslizarElementos.js"></script>
</body>

</html>