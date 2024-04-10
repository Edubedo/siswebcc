<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
    include("../../templates/header.php");
    ?>
Editar portafolio

<?php 
    include("../../templates/footer.php");
?>