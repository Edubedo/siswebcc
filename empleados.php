<!DOCTYPE html>
<html lang="es">

<head>
    <title>Equipo de trabajo | Sistema de prestamo de equipos de computo</title>
    <!-- Meta -->
    <?php include("./templates/etiquetas-meta.php"); ?>
    <!-- Icono -->
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <!-- Rel Bootstrap -->
    <?php include("./templates/librerias-head.php"); ?>
    <!-- Estilos -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navbar Inicio -->
   <div class="p-0 container-fluid nav-bar">
   <?php include("./templates/header.php");
    ?>
   </div>
    <!-- Navbar Fin -->


    <!-- Página Encabezado Inicio -->
    <div class="mb-5 container-fluid page-header position-relative">

        <div class="pt-0 pt-2 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 200px">
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Equipo de trabajo</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="index.php">Inicio</a></p>
                <p class="px-2 m-0 text-white">/</p>
                <p class="m-0 text-white">Equipo de trabajo</p>
            </div>
        </div>
    </div>
    <!-- Página Encabezado Fin -->


    <!-- Empleados Inicio -->
    <div class="flex-grow-1">
        <?php include("./templates/views/empleados.php"); ?>
    </div>
    <!-- Empleados Fin -->


    <!-- Footer Inicio -->
    <div class="mt-auto">
        <?php include("./templates/footer.php"); ?>
    </div>

    <!-- Footer Fin -->

    <!-- JavaScript Libraries -->
    <?php include("./templates/librerias-js.php"); ?>

</body>

</html>