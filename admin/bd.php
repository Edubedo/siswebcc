<?php

// COMMENTS THIS LINES IN PROD MODE
// require_once __DIR__ . '/../vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
// $dotenv->load();
// END COMMENTS

$servidor = $_ENV['SERVER_DB'];
$baseDeDatos = $_ENV['DB_DB'];
$usuario = $_ENV['USER_DB'];
$contrasenia = $_ENV['PASSWORD_DB'];

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contrasenia);
} catch(Exception $error) {
    echo $error->getMessage();
}
