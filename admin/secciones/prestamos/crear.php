<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
    include("../../bd.php");
if($_POST) {
 // if the key '' exists in the $_POST array, then assign its value to $x, otherwise assign an empty string
    $ID_usuario = (isset($_POST['ID_usuario']))?$_POST['ID_usuario']:"";
    $s_asunto = (isset($_POST['s_asunto']))?$_POST['s_asunto']:"";
    $s_descripcion = (isset($_POST['s_descripcion']))?$_POST['s_descripcion']:"";

    $sentencia=$conexion->prepare("INSERT INTO `tbl_historial_prestamos` (`ID`, `ID_usuario`, `s_asunto`, `s_descripcion`) 
    VALUES ('','$ID_usuario','$s_asunto', '$s_descripcion')");


    $sentencia->execute();
 
    header("Location: index.php");
}
    include("../../templates/header.php");
?>

<div class="card">
    <div class="card-header">Crear prestamo</div>
    <div class="card-body">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="mb-3">
            <label for="s_asunto" class="form-label">Alumnos:</label>
            <input
                type="text"
                class="form-control"
                name="s_asunto"
                id="s_asunto"
                aria-describedby="helpId"
                placeholder="s_asunto"
                required="true"

            />


        </div>  
        
        <div class="mb-3">
            <label for="s_asunto" class="form-label">Asunto:</label>
            <input
                type="text"
                class="form-control"
                name="s_asunto"
                id="s_asunto"
                aria-describedby="helpId"
                placeholder="s_asunto"
                required="true"

            />


        </div> 

        <div class="mb-3">
            <label for="s_descripción" class="form-label">Descripción</label>
            <input
                type="text"
                class="form-control"
                name="s_descripción"
                id="s_descripción"
                aria-describedby="helpId"
                placeholder="Título"
                required="true"

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