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

// Obtener los usuarios de la tabla tbl_usuarios
$queryUsuarios = $conexion->query("SELECT * FROM tbl_usuarios");
$usuarios = $queryUsuarios->fetchAll(PDO::FETCH_ASSOC);

// Obtener los usuarios de la tabla tbl_usuarios
$queryTipoEquipos = $conexion->query("SELECT * FROM tbl_tipo_equipo_computo");
$tipo_equipos = $queryTipoEquipos->fetchAll(PDO::FETCH_ASSOC);

if ($_POST) {
    // if the key '' exists in the $_POST array, then assign its value to $x, otherwise assign an empty string
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
    $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : "";
    $url_foto = (isset($_POST['url_foto'])) ? $_POST['url_foto'] : "";
    $puesto = (isset($_POST['puesto'])) ? $_POST['puesto'] : "";
    $responsable = (isset($_POST['responsable'])) ? $_POST['responsable'] : "";
    $tipo = (isset($_POST['tipo'])) ? $_POST['tipo'] : "";
    $estado = (isset($_POST['estado'])) ? $_POST['estado'] : "";
    $encargado = (isset($_POST['encargado'])) ? $_POST['encargado'] : "";
    $marca = (isset($_POST['marca'])) ? $_POST['marca'] : "";
    $modelo = (isset($_POST['modelo'])) ? $_POST['modelo'] : "";

    $sentencia = $conexion->prepare("INSERT INTO `tbl_equipos_computo` (`ID`, `nombre`, `descripcion`, `url_foto`, `responsable`, `tipo`, `estado`, `marca`, `modelo`)  
    VALUES (NULL, '$nombre', '$descripcion', '$url_foto', '$responsable', '$tipo', '$estado', '$marca', '$modelo')");



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
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Crear equipo de cómputo</h1>
            <div class="d-inline-flex mb-lg-5">

            </div>
        </div>

    </div>
    <!-- Página Encabezado Fin -->

    <div class="card flex-grow-1">

        <!-- Listar Equipos -->
        <div class="card">
            <h2 class="card-header">Formulario Equipo de Cómputo</h2>
            <div class="card-body">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre" />
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripción" />
                    </div>

                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-control" name="tipo" id="tipo" required="true">
                            <?php foreach ($tipo_equipos as $tipo) : ?>
                                <option value="<?php echo $tipo['nombre']; ?>"><?php echo $tipo['nombre']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="text" class="form-control" name="marca" id="marca" aria-describedby="helpId" placeholder="Marca" />
                    </div>

                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" name="modelo" id="modelo" aria-describedby="helpId" placeholder="Modelo" />
                    </div>

                    <div class="mb-3">
                        <label for="responsable" class="form-label">Responsable</label>
                        <select class="form-control" name="responsable" id="responsable" required="true">
                            <?php foreach ($usuarios as $usuario) : ?>
                                <option value="<?php echo $usuario['nombre_completo']; ?>"><?php echo $usuario['nombre_completo']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="url_foto" class="form-label">URL Imagen</label>
                        <input type="text" class="form-control" name="url_foto" id="url_foto" aria-describedby="helpId" placeholder="URL Imagen" required="true" onchange="previewImage(event)" />
                    </div>



                    <div class="mb-3">
                        <label for="estado" class="form-label">Estatus</label>
                        <select class="form-control" name="estado" id="estado" required="true">
                            <?php foreach ($estado as $estado) : ?>
                                <option value="<?php echo $estado['nombre']; ?>"><?php echo $estado['nombre']; ?></option>
                            <?php endforeach; ?>
                        </select>
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