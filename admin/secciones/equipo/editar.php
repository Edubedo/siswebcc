<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
include("../../bd.php"); // We need to add the db

$id = $imagen = $nombrecompleto = $puesto = $twiter = $facebook = $linkedin = '';

if(isset($_GET['txtID'])){ // If the key 'txtID' exists in the $_GET array
    $sentencia=$conexion->prepare("SELECT * FROM `tbl_equipo` WHERE ID=:ID"); // Prepare the query
    $sentencia->bindParam(':ID', $_GET['txtID']);
    $sentencia->execute();

    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    $id = $registro['ID'];
    $imagen = $registro['imagen'];
    $nombrecompleto = $registro['nombrecompleto'];
    $puesto = $registro['puesto'];
    $twiter = $registro['twiter'];
    $facebook = $registro['facebook'];
    $linkedin = $registro['linkedin'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['txtID'];
    $imagen = $_POST['imagen'];
    $nombrecompleto = $_POST['nombrecompleto'];
    $puesto = $_POST['puesto'];
    $twiter = $_POST['twiter'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];

    $sentencia = $conexion->prepare("UPDATE `tbl_equipo` SET `imagen`=:imagen, `nombrecompleto`=:nombrecompleto, `puesto`=:puesto, `twiter`=:twiter, `facebook`=:facebook, `linkedin`=:linkedin WHERE `tbl_equipo`.`ID`=:ID");
    $sentencia->bindParam(':imagen', $imagen);
    $sentencia->bindParam(':nombrecompleto', $nombrecompleto);
    $sentencia->bindParam(':puesto', $puesto);
    $sentencia->bindParam(':twiter', $twiter);
    $sentencia->bindParam(':facebook', $facebook);
    $sentencia->bindParam(':linkedin', $linkedin);
    $sentencia->bindParam(':ID', $id);
    $sentencia->execute();

    header("Location: index.php"); // Redirect to the index page after successful update
}

include("../../templates/header.php");
?>
<div class="card">
    <div class="card-header">Editar integrante de equipo</div>
    <div class="card-body">
    <form action="" enctype="multipart/form-data" method="post">
    <div class="mb-3">
            
    
    <label for="txtID" class="form-label">ID: </label>

    <input
                type="text"
                class="form-control"
                name="txtID"
                id="txtID"
                aria-describedby="helpId"
                placeholder="ID"
                value="<?php echo $id; ?>"
            />
        </div>
    <div class="mb-3">
            <label for="imagen" class="form-label">Imagen:</label>
            <input
                type="text"
                class="form-control"
                name="imagen"
                id="imagen"
                aria-describedby="helpId"
                placeholder="Imagen"
                value="<?php echo $imagen; ?>"
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
                value="<?php echo $nombrecompleto; ?>"
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
                value="<?php echo $puesto; ?>"
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
                value="<?php echo $twiter; ?>"
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
                value="<?php echo $facebook; ?>"
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
                value="<?php echo $linkedin; ?>"
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