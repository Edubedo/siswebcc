<?php 
    include("../../bd.php");
if($_POST) {
 // if the key '' exists in the $_POST array, then assign its value to $x, otherwise assign an empty string
    $icono = (isset($_POST['icono']))?$_POST['icono']:"";
    $titulo = (isset($_POST['titulo']))?$_POST['titulo']:"";
    $descripcion = (isset($_POST['descripcion']))?$_POST['descripcion']:"";

    echo $icono;
    echo $titulo; 
    echo $descripcion;
    
    $sentencia=$conexion->prepare("INSERT INTO `tbl_servicios` (`ID`, `icono`, `titulo`, `descripcion`) 
    VALUES (NULL, '$icono', '$titulo', '$descripcion');");

    $sentencia->execute();
}
    include("../../templates/header.php");

?>
<div class="card">
    <div class="card-header">Crear usuario</div>
    <div class="card-body">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario:</label>
            <input
                type="text"
                class="form-control"
                name="usuario"
                id="usuario"
                aria-describedby="helpId"
                placeholder="Usuario"
            />
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input
                type="text"
                class="form-control"
                name="correo"
                id="correo"
                aria-describedby="helpId"
                placeholder="Correo Electrónico"
            />
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input
                type="password"
                class="form-control"
                name="password"
                id="password"
                aria-describedby="helpId"
                placeholder="Contraseña"
            />
        </div>
        

    <button
        type="submit"
        class="btn btn-success"
    >
        Agregar
    </button>
    <a
        name=""
        id=""
        class="btn btn-danger"
        href="index.php"
        role="button"
        >Cancelar</a
    >
    
    
    </form>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>


<?php 
    include("../../templates/footer.php");
?>