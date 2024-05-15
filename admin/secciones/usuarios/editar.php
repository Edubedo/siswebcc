<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
include("../../bd.php");
// Obtener los usuarios de la tabla tbl_tipos_usuarios
$queryTiposUsuarios = $conexion->query("SELECT * FROM tbl_tipos_usuarios");
$tiposUsuarios = $queryTiposUsuarios->fetchAll(PDO::FETCH_ASSOC);

$id = $usuario = $correo = $password = '';

if (isset($_GET['txtID'])) { // If the key 'txtID' exists in the $_GET array
    $sentencia = $conexion->prepare("SELECT * FROM `tbl_usuarios` WHERE id=:ID"); // Prepare the query
    $sentencia->bindParam(':ID', $_GET['txtID']);
    $sentencia->execute();

    $registro = $sentencia->fetch(PDO::FETCH_LAZY);
    // We need to fetch the data and we are going to receive the information for every id
    $id = $registro['id'];
    $usuario = $registro['usuario'];
    $correo = $registro['correo'];
    $password = $registro['password'];
    $nombre_completo = $registro['nombre_completo'];
    $tipo_usuario = $registro['tipo_usuario'];
    $foto = $registro['foto'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['txtID'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $nombre_completo = $_POST['nombre_completo'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $foto = $_POST['foto'];

    $sentencia = $conexion->prepare("UPDATE `tbl_usuarios` SET `usuario` = :usuario, `password` = :password, `correo` = :correo, `nombre_completo` = :nombre_completo, `tipo_usuario` = :tipo_usuario, `foto` = :foto  WHERE `tbl_usuarios`.`id` = :id");
    $sentencia->bindParam(':usuario', $usuario);
    $sentencia->bindParam(':password', $password);
    $sentencia->bindParam(':correo', $correo);
    $sentencia->bindParam(':id', $id);
    $sentencia->bindParam(':nombre_completo', $nombre_completo);
    $sentencia->bindParam(':tipo_usuario', $tipo_usuario);
    $sentencia->bindParam(':foto', $foto);
    $sentencia->execute();

    header("Location: index.php"); // Redirect to the index page after successful update
}

include("../../templates/header.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Administrador compudc</title>
    <!-- Meta -->
    <?php include("./templates/etiquetas-meta.php"); ?>
    <!-- Icono -->
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <!-- Rel Bootstrap -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <?php include("./templates/librerias-head.php"); ?>

    <link rel="stylesheet" href="../../../css/style.min.css">

    <style>
        .card {
            margin: 1rem;
        }

        .card h2 {
            padding: 1rem;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navbar Inicio -->
    <?php include("./templates/header.php"); ?>
    <!-- Navbar Fin -->

    <!-- Página Encabezado Inicio -->
    <div class="mb-5 container-fluid page-header position-relative">

        <div class="pt-1 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 200px">
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Editar Usuario</h1>
            <div class="d-inline-flex mb-lg-5">

            </div>
        </div>

    </div>
    <!-- Página Encabezado Fin -->

    <div class="card flex-grow-1">

        <!-- Listar Equipos -->


        <div class="card">
            <h2 class="card-header">Formulario Edición Usuario</h2>
            <div class="card-body">
                <form action="" enctype="multipart/form-data" method="post">
                    <div>
                        <input type="hidden" name="txtID" value="<?php echo $id; ?>" />
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Usuario" required="true" value="<?php echo $usuario; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="nombre_completo" class="form-label">Nombre Completo:</label>
                        <input type="text" value="<?php echo $nombre_completo; ?>" class="form-control" name="nombre_completo" id="nombre_completo" aria-describedby="helpId" placeholder="Nombre Completo" required="true" />
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="text" class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Correo Electrónico" required="true" value="<?php echo $correo; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="tipo_usuario" class="form-label">Tipo de usuario</label>
                        <select class="form-control" name="tipo_usuario" id="tipo_usuario" required="true">
                            <?php foreach ($tiposUsuarios as $tipo) : ?>
                                <option value="<?php echo $tipo['nombre']; ?>" <?php if ($tipo['nombre'] == $tipo_usuario) echo 'selected'; ?>><?php echo $tipo['nombre']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">URL Imagen</label>
                        <input type="text" class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="URL Imagen" value="<?php echo $foto; ?>" required="true" onchange="previewImage(event)" />
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Contraseña" required="true" value="<?php echo $password; ?>" />
                    </div>


                    <button type="submit" class="btn btn-success">
                        Agregar
                    </button>
                    <a name="" id="" class="btn btn-danger" href="index.php" role="button">Volver</a>


                </form>
            </div>
            <div class="card-footer text-muted">

            </div>
        </div>

    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <!-- Footer Inicio -->
    <?php include("../../../templates/footer.php"); ?>
    <!-- Footer Fin -->

    <?php include("./templates/librerias-js.php"); ?>
</body>

</html>