<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
include("./templates/header.php"); ?>
<br>
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Sistemas web para el control inventarios</h1>
        <p class="col-md-8 fs-4">
        </p>
        <button class="btn btn-primary btn-lg" type="button">
            Example button
        </button>
    </div>
</div>

<?php include("./templates/footer.php"); ?>
