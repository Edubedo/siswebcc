<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
include("../../bd.php"); // We need to add the db

if(isset($_GET['txtID'])){ // If the key 'txtID' exists in the $_GET array
    $sentencia=$conexion->prepare("DELETE FROM `tbl_historial_prestamos` WHERE ID=:ID"); // Prepare the query
    $sentencia->bindParam(':ID', $_GET['txtID']);
    $sentencia->execute();
}
 $sentencia=$conexion->prepare("SELECT * FROM `tbl_historial_prestamos`");
 $sentencia->execute();
    $lista_servicios=$sentencia->fetchAll(PDO::FETCH_ASSOC); // We need to fetch the data
     
    include("../../templates/header.php");
?>



<!DOCTYPE html>
<html lang="es"> 
    <head>
        <title>Administrar prestamos | Sistema de prestamo de equipos de computo</title>
            <!-- Meta -->
        <?php include("./templates/etiquetas-meta.php"); ?>
            <!-- Icono -->
        <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <!-- Rel Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
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
    <?php include("./templates/header.php");?>
    <!-- Navbar Fin -->

  <!-- Página Encabezado Inicio -->
  <div class="mb-5 container-fluid page-header position-relative">

<div class="pt-1 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 200px">
    <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Prestamos</h1>
    <div class="d-inline-flex mb-lg-5">
       
    </div>
</div>
 
</div>
<!-- Página Encabezado Fin -->

<div class="card flex-grow-1">

<!-- Listar Servicios -->

<div class="card">
    <div class="card-header">
    <a
        name=""
        id=""
        style="background-color: #3f9e57;color: white;"
        class="btn"
        href="crear.php"
        role="button"
        >Agregar registro</a
    >
        
    </div>
    <div class="card-body">
    <div
        class="table-responsive-sm"
    >
        <table
            class="table"
        > 
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Asunto</th>
                    <th scope="col">Solicitante</th>
                    <th scope="col">Equipo</th>
                    <th scope="col">Grado y Grupo</th>
                    <th scope="col">Fecha Prestamo</th>
                    <th scope="col">Fecha Devolución</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <!-- Go through all records -->
                <?php foreach($lista_servicios as $registro) {?>
                    <tr class="">
                    <td><?php echo $registro['ID'] ?></td>
                    <td><?php echo $registro['s_asunto'] ?></td>
                    <td><?php echo $registro['nombre'] ?></td>
                    <td><?php echo $registro['equipo_computo'] ?></td>
                    <td><?php echo $registro['grado_grupo'] ?></td>
                    <td><?php echo $registro['fecha_prestamo'] ?></td>
                    <td><?php echo $registro['fecha_devolucion'] ?></td>
                    <td><?php echo $registro['estado'] ?></td>
                    <td>
                    <a
                            name=""
                            id=""
                            class="btn btn-info"
                            href="editar.php?txtID=<?php echo $registro['ID'] ?>"
                            role="button"
                            >Editar</a
                        >
                        |
                        <a
                            name=""
                            id=""
                            class="btn btn-danger"
                            href="index.php?txtID=<?php echo $registro['ID'] ?>"
                            role="button"
                            >Borrar</a
                        >
                        
                    </td>
                </tr>
             
               <?php } ?>
              
            </tbody>
        </table>
    </div>
    
    </div>
</div>
    </div>

   <!-- Footer Inicio -->
   <?php include("../../../templates/footer.php"); ?>
    <!-- Footer Fin -->

<?php include("./templates/librerias-js.php"); ?>
</body>
</html>
  





