<?php 
    include("../../bd.php");
if($_POST) {
 // if the key '' exists in the $_POST array, then assign its value to $x, otherwise assign an empty string
    $imagen = (isset($_POST['imagen']))?$_POST['imagen']:"";
    $nombrecompleto = (isset($_POST['nombrecompleto']))?$_POST['nombrecompleto']:"";
    $puesto = (isset($_POST['puesto']))?$_POST['puesto']:"";
    $twiter = (isset($_POST['twiter']))?$_POST['twiter']:"";
    $facebook = (isset($_POST['facebook']))?$_POST['facebook']:"";
    $linkedin = (isset($_POST['linkedin']))?$_POST['linkedin']:"";

    echo $imagen;
    echo $nombrecompleto;
    echo $puesto;
    echo $twiter;
    echo $facebook;
    echo $linkedin;
    
    $sentencia=$conexion->prepare("INSERT INTO `tbl_equipo` (`ID`, `imagen`, `nombrecompleto`, `puesto`, `twiter`, `facebook`, `linkedin`) 
    VALUES (NULL, '$imagen', '$nombrecompleto', '$puesto', '$twiter', '$facebook', '$linkedin')");
    

    $sentencia->execute();
}
    include("../../templates/header.php");

?>
<div class="card">
    <div class="card-header">Crear integrante de equipo</div>
    <div class="card-body">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen:</label>
            <input
                type="text"
                class="form-control"
                name="imagen"
                id="imagen"
                aria-describedby="helpId"
                placeholder="Imagen"
            />


        </div>

        <div class="mb-3">
            <label for="nombrecompleto" class="form-label">Nombre Completo</label>
            <input
                type="text"
                class="form-control"
                name="nombrecompleto"
                id="nombrecompleto"
                aria-describedby="helpId"
                placeholder="Nombre Completo"
            />
        </div>
        
        <div class="mb-3">
            <label for="puesto" class="form-label">Puesto</label>
            <input
                type="text"
                class="form-control"
                name="puesto"
                id="puesto"
                aria-describedby="helpId"
                placeholder="Puesto"
            />
        </div>

        <div class="mb-3">
            <label for="twiter" class="form-label">Twiter</label>
            <input
                type="text"
                class="form-control"
                name="twiter"
                id="twiter"
                aria-describedby="helpId"
                placeholder="Twiter"
            />
        </div>

        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook</label>
            <input
                type="text"
                class="form-control"
                name="facebook"
                id="facebook"
                aria-describedby="helpId"
                placeholder="Facebook"
            />
        </div>

        <div class="mb-3">
            <label for="linkedin" class="form-label">Linkeedin</label>
            <input
                type="text"
                class="form-control"
                name="linkedin"
                id="linkedin"
                aria-describedby="helpId"
                placeholder="Linkeedin"
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