<?php
    // $url_admin="https://siswebcc-d1eecd8d184b.herokuapp.com/admin/";
    $url_admin="http://localhost/compudc/admin/";
    // $url_blog="https://siswebcc-d1eecd8d184b.herokuapp.com/"
    $url_blog="http://localhost/compudc/"
?>

<div class="p-0 container-fluid nav-ba" style="background-color: #3F9E5F; margin-bottom: 3px;">
        <nav class="py-3 navbar navbar-expand-lg bg-none navbar-dark">
        <a href="http://localhost/compudc/admin/" class="m-0 navbar-brand px-lg-4">
    <h1 class="m-0 text-white display-4 text-uppercase">Administrador</h1>
</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" name="Navbar" aria-label="Barra de navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="p-4 ml-auto navbar-nav">
                     <a class="nav-link" href="<?php echo $url_admin ?>secciones/servicios">Servicios</a>
                     <a class="nav-link" href="<?php echo $url_admin ?>secciones/equipo">Equipos de computo</a>
                     <a class="nav-link" href="<?php echo $url_admin ?>secciones/prestamos">Prestamos</a>
                     <a class="nav-link" href="<?php echo $url_admin ?>secciones/usuarios">Usuarios</a>
                    <a href="<?php echo $url_blog ?>" class="nav-item nav-link">Blog</a>
                    <a href="<?php echo $url_admin ?>cerrar.php" class="nav-item nav-link">Cerrar Sesión</a>
                </div>
            </div>
        </nav>
    </div> 
