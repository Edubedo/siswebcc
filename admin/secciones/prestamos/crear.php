<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
include("../../bd.php");

// Obtener los estatus de la tabla tbl_estatus
$query = $conexion->query("SELECT * FROM tbl_estatus");
$estatus = $query->fetchAll(PDO::FETCH_ASSOC);

// Obtener los usuarios de la tabla tbl_usuarios
$queryUsuarios = $conexion->query("SELECT * FROM tbl_usuarios");
$usuarios = $queryUsuarios->fetchAll(PDO::FETCH_ASSOC);

// Obtener los grados_grupo de la tabla tbl_grados_grupos
$queryGradosGrupos = $conexion->query("SELECT * FROM tbl_grados_grupos");
$gradosGrupos = $queryGradosGrupos->fetchAll(PDO::FETCH_ASSOC);

if ($_POST) {
    // if the key '' exists in the $_POST array, then assign its value to $x, otherwise assign an empty string
    $icono = (isset($_POST['icono'])) ? $_POST['icono'] : "";
    $asunto = (isset($_POST['asunto'])) ? $_POST['asunto'] : "";
    $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : "";
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
    $grado_grupo = (isset($_POST['grado_grupo'])) ? $_POST['grado_grupo'] : "";
    $estado = (isset($_POST['estado'])) ? $_POST['estado'] : "";
    $fecha_prestamo = (isset($_POST['fecha_prestamo'])) ? $_POST['fecha_prestamo'] : "";
    $fecha_devolucion = (isset($_POST['fecha_devolucion'])) ? $_POST['fecha_devolucion'] : "";

    $sentencia = $conexion->prepare("INSERT INTO `tbl_historial_prestamos` (`ID`, `s_asunto`, `s_descripcion`, `d_fecha_creacion`, `nombre`, `grado_grupo`, `fecha_prestamo`, `fecha_devolucion`, `estado`)
     VALUES (NULL, '$asunto', '$descripcion', CURRENT_TIMESTAMP, '$nombre', '$grado_grupo', '$fecha_prestamo', '$fecha_devolucion', '$estado');");

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
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Crear prestamo</h1>
            <div class="d-inline-flex mb-lg-5">

            </div>
        </div>

    </div>
    <!-- Página Encabezado Fin -->

    <div class="card flex-grow-1">

        <!-- Listar Equipos -->
        <div class="card">
            <h2 class="card-header">Crear prestamo</h2>
            <div class="card-body">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                        <label for="asunto" class="form-label">Asunto</label>
                        <input type="text" class="form-control" name="asunto" id="asunto" aria-describedby="helpId" placeholder="Asunto" required="true" />
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripción" required="true" />
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del solicitante</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Descripción" required="true" />
                    </div>

                    <div class="mb-3">
                        <label for="grado_grupo" class="form-label">Grado y Grupo</label>
                        <select class="form-control" name="grado_grupo" id="grado_grupo" required="true">
                            <?php foreach ($gradosGrupos as $gragrup) : ?>
                                <option value="<?php echo $gragrup['nombre']; ?>"><?php echo $gragrup['nombre']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-control" name="estado" id="estado" required="true">
                            <?php foreach ($estatus as $estado) : ?>
                                <option value="<?php echo $estado['nombre']; ?>"><?php echo $estado['nombre']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_prestamo" class="form-label">Fecha de prestamo</label>
                        <input type="datetime-local" class="form-control" name="fecha_prestamo" id="fecha_prestamo" required="true">
                    </div>

                    <div class="mb-3">
                        <label for="fecha_devolucion" class="form-label">Fecha de devolución</label>
                        <input type="datetime-local" class="form-control" name="fecha_devolucion" id="fecha_devolucion" required="true">
                    </div>

                    <div class="mb-3">
                        <label for="icono" class="form-label">Icono:</label>
                        <input type="text" class="form-control" name="icono" id="icono" aria-describedby="helpId" placeholder="Icono" required="true" />


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
>