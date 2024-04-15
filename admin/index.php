<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
include("./templates/header.php"); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
         <h2>
    Bienvenido, 
    <?php 
        echo isset($_SESSION['usuario']['usuario']) && !empty($_SESSION['usuario']['usuario']) 
            ? $_SESSION['usuario']['usuario'] 
            : 'Usuario'; 
    ?>!
</h2>          
        </div>
    </div>
</div>

<div class="p-5 mb-4 bg-light rounded-3 mt-5">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Sistemas web para el control de de</h1>
        <p class="col-md-8 fs-4">
            Nuestro sistema de control de inventarios te permite gestionar y rastrear tus productos de manera eficiente. Puedes agregar, editar y eliminar productos, así como ver informes detallados de tus inventarios.
        </p>
    </div>
</div>

<?php include("./templates/footer.php"); ?>