<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
    include("../../bd.php");
if($_POST) {
 // if the key '' exists in the $_POST array, then assign its value to $x, otherwise assign an empty string
    $usuario = (isset($_POST['usuario']))?$_POST['usuario']:"";
    $correo = (isset($_POST['correo']))?$_POST['correo']:"";
    $password = (isset($_POST['password']))?$_POST['password']:"";

    $sentencia=$conexion->prepare("INSERT INTO `tbl_usuarios` (`ID`, `usuario`, `password`, `correo`) 
    VALUES (NULL, '$usuario', '$password', '$correo');");

    $sentencia->execute();

    header("Location: index.php");
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
                required="true"
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
                required="true"
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