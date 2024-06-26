<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
include("../../bd.php"); // We need to add the db

// Obtener los estado de la tabla tbl_estatus
$query = $conexion->query("SELECT * FROM tbl_estatus");
$estatus = $query->fetchAll(PDO::FETCH_ASSOC);

// Obtener los usuarios de la tabla tbl_usuarios
$queryUsuarios = $conexion->query("SELECT * FROM tbl_usuarios");
$usuarios = $queryUsuarios->fetchAll(PDO::FETCH_ASSOC);

// Obtener los usuarios de la tabla tbl_usuarios
$queryTipoEquipos = $conexion->query("SELECT * FROM tbl_tipo_equipo_computo");
$tipo_equipos = $queryTipoEquipos->fetchAll(PDO::FETCH_ASSOC);

$id = $imagen = $nombrecompleto = $puesto = $twiter = $facebook = $linkedin = '';

if (isset($_GET['txtID'])) { // If the key 'txtID' exists in the $_GET array
    $sentencia = $conexion->prepare("SELECT * FROM `tbl_equipos_computo` WHERE ID=:ID"); // Prepare the query
    $sentencia->bindParam(':ID', $_GET['txtID']);
    $sentencia->execute();

    $registro = $sentencia->fetch(PDO::FETCH_LAZY);
    $id = $registro['ID'];
    $nombre = $registro['nombre'];
    $descripcion = $registro['descripcion'];
    $foto = $registro['foto'];
    $responsable = $registro['responsable'];
    $tipo = $registro['tipo'];
    $estado_servicio = $registro['estado'];
    $marca = $registro['marca'];
    $modelo = $registro['modelo'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['txtID'];
    $nombre = $_POST['titulo'];
    $estado_servicio = $_POST['estado'];
    $responsable = $_POST['responsable'];
    $tipo = $_POST['tipo'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $descripcion = $_POST['descripcion'];
    $foto = $_POST['foto'];
    echo $id;
    echo $nombre;
    echo $estado_servicio;
    echo $responsable;
    echo $tipo;
    echo $marca;
    echo $modelo;
    echo $descripcion;
    echo $foto;

    $sentencia = $conexion->prepare("UPDATE `tbl_equipos_computo` SET `nombre`=:nombre, `descripcion`=:descripcion, `foto`=:foto, `responsable`=:responsable, `tipo`=:tipo, `estado`=:estado, `marca`=:marca, `modelo`=:modelo WHERE `ID`=:ID");
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':estado', $estado_servicio);
    $sentencia->bindParam(':responsable', $responsable);
    $sentencia->bindParam(':tipo', $tipo);
    $sentencia->bindParam(':marca', $marca);
    $sentencia->bindParam(':modelo', $modelo);
    $sentencia->bindParam(':descripcion', $descripcion);
    $sentencia->bindParam(':foto', $foto);
    $sentencia->bindParam(':ID', $id);
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
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Editar equipo de cómputo</h1>
            <div class="d-inline-flex mb-lg-5">

            </div>
        </div>

    </div>
    <!-- Página Encabezado Fin -->

    <div class="card flex-grow-1">

        <!-- Listar Equipos -->


        <div class="card">
            <h2 class="card-header">Formulario Edición Equipo de Cómputo</h2>
            <div class="card-body">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID" value="<?php echo $id; ?>" hidden="true" />
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Nombre" value="<?php echo $nombre; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripción" value="<?php echo $descripcion; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-control" name="tipo" id="tipo" required="true">
                            <?php foreach ($tipo_equipos as $tipo_equipo) : ?>
                                <option value="<?php echo $tipo_equipo['nombre']; ?>" <?php echo $tipo_equipo['nombre'] == $tipo ? 'selected' : ''; ?>>
                                    <?php echo $tipo_equipo['nombre']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="text" class="form-control" name="marca" id="marca" aria-describedby="helpId" placeholder="Marca" value="<?php echo $marca; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" name="modelo" id="modelo" aria-describedby="helpId" placeholder="Modelo" value="<?php echo $modelo; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="responsable" class="form-label">Responsable</label>
                        <select class="form-control" name="responsable" id="responsable" required="true">
                            <?php foreach ($usuarios as $usuario) : ?>
                                <option value="<?php echo $usuario['nombre_completo']; ?>" <?php echo $usuario['nombre_completo'] == $responsable ? 'selected' : ''; ?>>
                                    <?php echo $usuario['nombre_completo']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>



                    <div class="mb-3">
                        <label for="foto" class="form-label">URL Imagen</label>
                        <input type="text" value="<?php echo $foto; ?>" class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="URL Imagen" required="true" onchange="previewImage(event)" />
                    </div>



                    <div class="mb-3">
                        <label for="estado" class="form-label">Estatus</label>
                        <select class="form-control" name="estado" id="estado" required="true">
                            <?php foreach ($estatus as $estado) : ?>
                                <option value="<?php echo $estado['nombre']; ?>" <?php echo $estado['nombre'] == $estado_servicio ? 'selected' : ''; ?>>
                                    <?php echo $estado['nombre']; ?>
                                </option>
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