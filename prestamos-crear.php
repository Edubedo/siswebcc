<!DOCTYPE html>
<html lang="es">

<head>
    <title>Solicitar prestamo | Sistema de prestamo de equipos de computo</title>
    <!-- Meta -->
    <?php include("./templates/etiquetas-meta.php"); ?>
    <!-- Icono -->
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <!-- Rel Bootstrap -->
    <?php include("./templates/librerias-head.php"); ?>
    <!-- Estilos -->
    <link href="css/style.min.css" rel="stylesheet">
</head>


<body>
    <?php
    include("./admin/bd.php"); // We need to add the db

    if (isset($_GET['txtID'])) { // If the key 'txtID' exists in the $_GET array
        $sentencia = $conexion->prepare("DELETE FROM `tbl_historial_prestamos` WHERE ID=:ID"); // Prepare the query
        $sentencia->bindParam(':ID', $_GET['txtID']);
        $sentencia->execute();
    }
    $sentencia = $conexion->prepare("SELECT * FROM `tbl_historial_prestamos`");
    $sentencia->execute();
    $lista_servicios = $sentencia->fetchAll(PDO::FETCH_ASSOC); // We need to fetch the data

    ?>
    <!-- Navbar Inicio -->
    <?php include("./templates/header.php");
    ?>
    <!-- Navbar Fin -->


    <!-- Página Encabezado Inicio -->
    <div class="mb-5 container-fluid page-header position-relative">

        <div class="pt-0 pt-2 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 200px">
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Prestamos</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Inicio</a></p>
                <p class="px-2 m-0 text-white">/</p>
                <p class="m-0 text-white">Prestamos</p>
            </div>
        </div>
    </div>
    <!-- Página Encabezado Fin -->


    <!-- Prestamos Inicio -->

    <div class="card">
        <div class="card-header">Crear prestamo</div>
        <div class="card-body">
            <form action="" enctype="multipart/form-data" method="post">
                <div class="mb-3">
                    <label for="icono" class="form-label">Icono:</label>
                    <input type="text" class="form-control" name="icono" id="icono" aria-describedby="helpId" placeholder="Icono" required="true" />


                </div>

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Título" required="true" />
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripción" required="true" />
                </div>

                <button type="submit" class="btn btn-success">
                    Agregar
                </button>
                <a name="" id="" class="btn btn-danger" href="prestamos.php" role="button">Volver</a>


            </form>
        </div>
        <div class="card-footer text-muted">

        </div>
    </div>
    <!-- Prestamos Fin -->


    <!-- Footer Inicio -->
    <?php include("./templates/footer.php"); ?>
    <!-- Footer Fin -->

    <!-- JavaScript Libraries -->
    <?php include("./templates/librerias-js.php"); ?>

</body>

</html>