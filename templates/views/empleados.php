<?php
include("./admin/bd.php"); // We need to add the db

$sentencia = $conexion->prepare("SELECT * FROM `tbl_usuarios` WHERE tipo_usuario='Soporte'");
$sentencia->execute();
$lista_empleados = $sentencia->fetchAll(PDO::FETCH_ASSOC); // We need to fetch the data


?>

<div class="py-5 container-fluid">
    <div class="container">
        <div class="col-lg-6">
            <?php foreach ($lista_empleados as $servicio) : ?>
                <div class="mb-5 row align-items-center">
                    <div class="col-4 col-sm-3">
                        <img class="mb-3 w-100 circle mb-sm-0" src="img/usuarios/<?php echo $servicio['foto']; ?>" alt="<?php echo $servicio['nombre_completo']; ?>" width="200" height="150">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4><?php echo $servicio['nombre_completo']; ?></h4>
                        <p class="m-0"><b>Correo:</b> <?php echo $servicio['correo']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>



        </div>
    </div>
</div>