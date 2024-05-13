<?php
// Mostrar todos los errores
error_reporting(E_ALL);

// Mostrar todos los errores en tiempo de ejecución
ini_set('display_errors', 1);

include("./admin/bd.php"); // We need to add the db

$sentencia_disponibles = $conexion->prepare("SELECT * FROM `tbl_equipos_computo` WHERE estado='Activo'");
$sentencia_disponibles->execute();
$lista_disponibles = $sentencia_disponibles->fetchAll(PDO::FETCH_ASSOC); // We need to fetch the data

$sentencia_no_disponibles = $conexion->prepare("SELECT * FROM `tbl_equipos_computo` WHERE estado!='Activo'");
$sentencia_no_disponibles->execute();
$lista_no_disponibles = $sentencia_no_disponibles->fetchAll(PDO::FETCH_ASSOC); // We need to fetch the data
?>

<div class="pt-5 container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-5 text-success">Disponibles </h3>
                <?php $count = 0; foreach($lista_disponibles as $equipo): $count++; ?>
                <div class="mb-5 row align-items-center equipo <?= $count > 3 ? 'hidden' : '' ?>">
                    <div class="col-4 col-sm-3">
                        <img class="mb-3 w-100 circle mb-sm-0" src="<?=$equipo['foto'] ?>" alt="<?= $equipo['nombre'] ?>" width="200" height="150">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4><?= $equipo['nombre'] ?></h4>
                        <p class="m-0"><?= $equipo['descripcion'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php if($count > 3): ?>
                <button class="btn btn-success ver-mas">Ver más</button>
                <?php endif; ?>
            </div>

            <div class="col-lg-6">
                <h3 class="mb-5 text-danger">No Disponibles / Reparaci&oacute;n</h3>
                <?php $count = 0; foreach($lista_no_disponibles as $equipo): $count++; ?>
                <div class="mb-5 row align-items-center equipo <?= $count > 3 ? 'hidden' : '' ?>">
                    <div class="col-4 col-sm-3">
                        <img class="mb-3 w-100 circle mb-sm-0" src="<?= $equipo['foto'] ?>" alt="<?= $equipo['nombre'] ?>" width="200" height="150">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4><?= $equipo['nombre'] ?></h4>
                        <p class="m-0"><?= $equipo['descripcion'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php if($count > 3): ?>
                <button class="btn btn-danger ver-mas">Ver más</button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.ver-mas').forEach(function(button) {
        button.addEventListener('click', function() {
            this.previousElementSibling.querySelectorAll('.equipo.hidden').forEach(function(equipo) {
                equipo.classList.remove('hidden');
            });
            this.remove();
        });
    });
</script>

<style>
    .hidden {
        display: none;
    }
</style>