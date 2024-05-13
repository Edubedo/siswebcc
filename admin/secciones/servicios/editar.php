<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
include("../../bd.php"); // We need to add the db

$id = $icono = $titulo = $descripcion = '';

// Obtener los estatus de la tabla tbl_estatus
$query = $conexion->query("SELECT * FROM tbl_estatus");
$estatus = $query->fetchAll(PDO::FETCH_ASSOC);

// Obtener los usuarios de la tabla tbl_usuarios
$queryUsuarios = $conexion->query("SELECT * FROM tbl_usuarios");
$usuarios = $queryUsuarios->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['txtID'])) { // If the key 'txtID' exists in the $_GET array
    $sentencia = $conexion->prepare("SELECT * FROM `tbl_servicios` WHERE ID=:ID"); // Prepare the query
    $sentencia->bindParam(':ID', $_GET['txtID']);
    $sentencia->execute();

    $registro = $sentencia->fetch(PDO::FETCH_LAZY);
    // We need to fetch the data and we are going to receive the information for every id
    $id = $registro['ID'];
    $icono = $registro['icono'];
    $titulo = $registro['titulo'];
    $descripcion = $registro['descripcion'];
    $responsable = $registro['responsable'];
    $estado_servicio = $registro['estado'];
    $horario = $registro['horario'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['txtID'];
    $icono = $_POST['icono'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $responsable = $_POST['responsable'];
    $estado = $_POST['estado'];
    $horario = $_POST['horario'];

    echo $estado;
    
    $sentencia = $conexion->prepare("UPDATE `tbl_servicios` SET `icono`=:icono, `titulo`=:titulo, `descripcion`=:descripcion, `responsable`=:responsable, `estado`=:estado, `horario`=:horario WHERE `ID`=:ID");
    $sentencia->bindParam(':ID', $id);
    $sentencia->bindParam(':icono', $icono);
    $sentencia->bindParam(':titulo', $titulo);
    $sentencia->bindParam(':descripcion', $descripcion);
    $sentencia->bindParam(':responsable', $responsable);
    $sentencia->bindParam(':estado', $estado);
    $sentencia->bindParam(':horario', $horario);
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
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Editar servicio</h1>
            <div class="d-inline-flex mb-lg-5">

            </div>
        </div>

    </div>
    <!-- Página Encabezado Fin -->

    <div class="card flex-grow-1">
        <!-- Listar Servicios -->
        <div class="card">
        <h2 class="card-header">Formulario Edición Servicio</h2>
            <div class="card-body">
                <form action="" enctype="multipart/form-data" method="post">
                    <div>
                        <input type="hidden" type="text" class="form-control" name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID" value="<?php echo $id; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Nombre" value="<?php echo $titulo; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripción" value="<?php echo $descripcion; ?>" />
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
                        <label for="icono" class="form-label">URL Imagen</label>
                        <input type="text" value="<?php echo $icono; ?>" class="form-control" name="icono" id="icono" aria-describedby="helpId" placeholder="URL Imagen" required="true" />                    </div>

 
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

                    <div class="mb-3">
                        <label for="horario" class="form-label">Horario</label>
                        <input type="datetime-local" class="form-control" name="horario" id="horario" required="true" value="<?php echo $horario; ?>">
                    </div>

                    <button type="submit" class="btn btn-success">
                        Editar
                    </button>
                    <a name="" id="" class="btn btn-danger" href="index.php" role="button">Volver</a>


                </form>
            </div>
            <div class="card-footer text-muted">

            </div>
        </div>
    </div>

    <!-- Footer Inicio -->
    <?php include("../../../templates/footer.php"); ?>
    <!-- Footer Fin -->

    <?php include("./templates/librerias-js.php"); ?>
</body>

</html>