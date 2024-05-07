<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
    include("../../bd.php");
if($_POST) {
 // if the key '' exists in the $_POST array, then assign its value to $x, otherwise assign an empty string
 $nombre = (isset($_POST['nombre']))?$_POST['nombre']:"";
 $descripcion = (isset($_POST['descripcion']))?$_POST['descripcion']:"";
 $url_foto = (isset($_POST['url_foto']))?$_POST['url_foto']:"";
 $puesto = (isset($_POST['puesto']))?$_POST['puesto']:"";
 $asignado = (isset($_POST['asignado']))?$_POST['asignado']:"";
 $tipo = (isset($_POST['tipo']))?$_POST['tipo']:"";
    
    $sentencia=$conexion->prepare("INSERT INTO `tbl_equipos_computo` (`ID`, `nombre`, `descripcion`, `url_foto`, `asignado`, `tipo`)  
    VALUES (NULL, '$nombre', '$descripcion', '$url_foto', '$asignado', '$tipo')");    
    
    
    
    $sentencia->execute();
    header("Location: index.php");

}
    include("../../templates/header.php");

?>
<div class="card">
    <div class="card-header">Crear material de computo</div>
    <div class="card-body">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="mb-3">
            <label for="url_foto" class="form-label">Imagen:</label>
            <input
                type="text"
                class="form-control"
                name="url_foto"
                id="url_foto"
                aria-describedby="helpId"
                placeholder="Imagen"
            />


        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                name="nombre"
                id="nombre"
                aria-describedby="helpId"
                placeholder="Nombre"
            />
        </div>
        
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input
                type="text"
                class="form-control"
                name="tipo"
                id="tipo"
                aria-describedby="helpId"
                placeholder="Tipo"
            />
        </div>

        <div class="mb-3">
            <label for="asignado" class="form-label">Empleado asignado</label>
            <input
                type="text"
                class="form-control"
                name="asignado"
                id="asignado"
                aria-describedby="helpId"
                placeholder="Tipo"
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
        >Volver</a
    >
    
    
    </form>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>


<?php 
    include("../../templates/footer.php");
?>