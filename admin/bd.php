<?php 
$servidor = "localhost"; // Nombre del servidor 
$baseDeDatos = "website"; // Nombre de la base de datos
$usuario = "root"; // Nombre de usuario
$contrasenia = "eduar2006"; // Contraseña

try {
    // Establecemos la conexión
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    echo "Conexión exitosa";
} catch(Exception $error) {
    echo $error->getMessage();
}
?>