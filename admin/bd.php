<?php




$keys = include("keys.php");

$servidor = $keys['SERVER_DB']; // Nombre del servidor 
$baseDeDatos = $keys['DB_DB']; // Nombre de la base de datos
$usuario = $keys['USER_DB'];// Nombre de usuario 
$contrasenia = $keys['PASSWORD_DB']; // Contraseña


try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contrasenia);
} catch(Exception $error) {
    echo $error->getMessage();
}
?>