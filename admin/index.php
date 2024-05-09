<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$url_admin="http://localhost/siswebcc/admin/";
$url_blog="http://localhost/siswebcc/";
?>
<!DOCTYPE html>
<html lang="es"> 
    <head>
        <title>Administrador siswebcc</title>
            <!-- Meta -->
        <?php include("./templates/etiquetas-meta.php"); ?>
            <!-- Icono -->
        <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <!-- Rel Bootstrap -->


        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <?php include("./templates/librerias-head.php"); ?>

        <link rel="stylesheet" href="../css/style.min.css">
    </head>
   
<body class="d-flex flex-column min-vh-100">
        <!-- Navbar Inicio -->
    <?php include("./templates/header.php");?>
    <!-- Navbar Fin -->

  <!-- Página Encabezado Inicio -->
  <div class="mb-5 container-fluid page-header position-relative">

<div class="pt-1 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 200px">
    <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Bienvenido al modo administrador</h1>
    <div class="d-inline-flex mb-lg-5">
       
    </div>
</div>
</div>
<!-- Página Encabezado Fin -->

<div class="card flex-grow-1">
    </div>

  <!-- Footer Inicio -->
  <?php include("../templates/footer.php"); ?>
    <!-- Footer Fin -->

<?php include("./templates/librerias-js.php"); ?>
</body>
</html>
  