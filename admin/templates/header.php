<?php
    $url_base="http://localhost/swci/admin/"
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Administrador del sitio web</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="../../css/index.css">
    </head>

    <body>
        <header>
            <!-- place navbar here -->

            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" aria-current="page">Administrador</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base ?>secciones/servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base ?>secciones/equipo">Equipo de computo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base ?>secciones/entradas">Prestamos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base ?>secciones/configuraciones">Configuraciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base ?>secciones/usuarios">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base ?>login.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
            
        </header>
        <main class="container">
            <br>