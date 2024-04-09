<?php 
include("../../bd.php"); // We need to add the db

$id = $icono = $titulo = $descripcion = '';

if(isset($_GET['txtID'])){ // If the key 'txtID' exists in the $_GET array
    $sentencia=$conexion->prepare("SELECT * FROM `tbl_servicios` WHERE ID=:ID"); // Prepare the query
    $sentencia->bindParam(':ID', $_GET['txtID']);
    $sentencia->execute();

    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    // We need to fetch the data and we are going to receive the information for every id
    $id = $registro['ID'];
    $icono = $registro['icono'];
    $titulo = $registro['titulo'];
    $descripcion = $registro['descripcion'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['txtID'];
    $icono = $_POST['icono'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    $sentencia = $conexion->prepare("UPDATE `tbl_servicios` SET `icono`=:icono, `titulo`=:titulo, `descripcion`=:descripcion WHERE `ID`=:ID");
    $sentencia->bindParam(':ID', $id);
    $sentencia->bindParam(':icono', $icono);
    $sentencia->bindParam(':titulo', $titulo);
    $sentencia->bindParam(':descripcion', $descripcion);
    $sentencia->execute();

    header("Location: index.php"); // Redirect to the index page after successful update
}

include("../../templates/header.php");
?>
<div class="card">
    <div class="card-header">Editar servicio</div>
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
            <label for="icono" class="form-label">Icono:</label>
            <input
                type="text"
                class="form-control"
                name="icono"
                id="icono"
                aria-describedby="helpId"
                placeholder="Icono"
                value="<?php echo $icono; ?>"
            />
        </div>

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input
                type="text"
                class="form-control"
                name="titulo"
                id="titulo"
                aria-describedby="helpId"
                placeholder="Título"
                value="<?php echo $titulo; ?>"
            />
        </div>
        
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input
                type="text"
                class="form-control"
                name="descripcion"
                id="descripcion"
                aria-describedby="helpId"
                placeholder="Descripción"
                value="<?php echo $descripcion; ?>"
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