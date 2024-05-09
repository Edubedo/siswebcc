<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

include("./templates/header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<body>
    
</body>
</html>
 