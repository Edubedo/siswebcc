<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$url_admin="http://localhost/compudc/admin/";
$url_blog="http://localhost/compudc/";
?> 
<!DOCTYPE html>
<html lang="es"> 
<head>
    <title>Administrador compudc</title>
    <!-- Meta -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php include("./templates/etiquetas-meta.php"); ?>
    <!-- Icono -->
    <link rel="shortcut icon" href="../img/favicon.svg" type="image/x-icon">
    <!-- Rel Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php include("./templates/librerias-head.php"); ?>
    <link rel="stylesheet" href="../css/style.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .page-header {
            background: #3F9E5F;
            color: white;
            padding: 40px 0;
        }
        .welcome-card {
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .welcome-card h2 {
            color: #3F9E5F;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navbar Inicio -->
    <?php include("./templates/header.php");?>
    <!-- Navbar Fin -->

    <!-- Página Encabezado Inicio -->
    <div class="container-fluid page-header position-relative">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h1 class="display-4 text-uppercase">Bienvenid@ al modo administrador</h1>
        </div>
    </div>
    <!-- Página Encabezado Fin -->

    <!-- Contenido Principal Inicio -->
    <div class="container">
        <div class="welcome-card">
            <h2>Panel de Administración</h2>
            <p>Utilice las opciones de la barra de navegación para gestionar servicios, equipos de computo, préstamos, y usuarios.</p>
        </div>
    </div>
    <!-- Contenido Principal Fin -->

    <!-- Footer Inicio -->
    <?php include("./templates/footer.php"); ?>
    <!-- Footer Fin -->

    <?php include("./templates/librerias-js.php"); ?>
</body>
</html>
