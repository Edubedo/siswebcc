<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
include("../../bd.php");
// Obtener los estado de la tabla tbl_estatus
$query = $conexion->query("SELECT * FROM tbl_estatus");
$estado = $query->fetchAll(PDO::FETCH_ASSOC);

// Obtener los usuarios de la tabla tbl_tipos_usuarios
$queryTiposUsuarios = $conexion->query("SELECT * FROM tbl_tipos_usuarios");
$tiposUsuarios = $queryTiposUsuarios->fetchAll(PDO::FETCH_ASSOC);
if ($_POST) {
    // if the key '' exists in the $_POST array, then assign its value to $x, otherwise assign an empty string
    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "";
    $correo = (isset($_POST['correo'])) ? $_POST['correo'] : "";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "";
    $tipo_usuario = (isset($_POST['tipo_usuario'])) ? $_POST['tipo_usuario'] : "";
    $nombre_completo = (isset($_POST['nombre_completo'])) ? $_POST['nombre_completo'] : "";

    $sentencia = $conexion->prepare("INSERT INTO `tbl_usuarios` (`ID`, `usuario`, `password`, `correo`, `tipo_usuario`, `nombre_completo`) 
    VALUES (NULL, '$usuario', '$password', '$correo', '$tipo_usuario', '$nombre_completo');");

    $sentencia->execute();

    header("Location: index.php");
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
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Crear Usuario</h1>
            <div class="d-inline-flex mb-lg-5">

            </div>
        </div>

    </div>
    <!-- Página Encabezado Fin -->

    <div class="card flex-grow-1">

        <!-- Listar Equipos -->


        <div class="card">
            <h2 class="card-header">Formulario Usuario</h2>
            <div class="card-body">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Usuario" required="true" />
                    </div>

                    <div class="mb-3">
                        <label for="nombre_completo" class="form-label">Nombre Completo:</label>
                        <input type="text" class="form-control" name="nombre_completo" id="nombre_completo" aria-describedby="helpId" placeholder="Usuario" required="true" />
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="text" class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Correo Electrónico" required="true" />
                    </div>

                    <div class="mb-3">
                        <label for="tipo_usuario" class="form-label">Tipo de usuario</label>
                        <select class="form-control" name="tipo_usuario" id="tipo_usuario" required="true">
                            <?php foreach ($tiposUsuarios as $tipo) : ?>
                                <option value="<?php echo $tipo['nombre']; ?>"><?php echo $tipo['nombre']; ?></option>                            <?php endforeach; ?>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Contraseña" required="true" />
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