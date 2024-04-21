<?php

// Sí existe es porque estamos en modo dev
if (file_exists(__DIR__ . '/../.env')) {
    // Cargar librerias para cargar variables de entorno
    require_once __DIR__ . '/../vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
}

// Obtener las variables de entorno
$servidor = $_ENV['SERVER_DB'];
$baseDeDatos = $_ENV['DB_DB'];
$usuario = $_ENV['USER_DB'];
$contrasenia = $_ENV['PASSWORD_DB'];

try {
    // Conectar a la base de datos
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contrasenia);
} catch(Exception $error) {
    // Manejar cualquier error de conexión
    echo $error->getMessage();
}
