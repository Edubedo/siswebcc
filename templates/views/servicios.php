<?php
include("./admin/bd.php"); // We need to add the db

$sentencia=$conexion->prepare("SELECT * FROM `tbl_servicios` WHERE estado='Activo'");
$sentencia->execute();
$lista_servicios=$sentencia->fetchAll(PDO::FETCH_ASSOC); // We need to fetch the data
?>

<div class="container">
    <div class="row">
        <?php foreach ($lista_servicios as $servicio): ?>
            <div class="mb-5 col-lg-6">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="mb-3 img-fluid mb-sm-0" src="<?php echo $servicio['icono']; ?>" alt="<?php echo $servicio['titulo']; ?>" width="200" height="200">
                    </div>
                    <div class="col-sm-7">
                        <h4><?php echo $servicio['titulo']; ?></h4>
                        <!-- <p class="m-0"><?php echo $servicio['descripcion']; ?></p> -->
                        <p class="m-0"><b>Responsable:</b> <?php echo $servicio['responsable']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>