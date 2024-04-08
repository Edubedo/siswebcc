<?php 
include("../../bd.php"); // We need to add the db

if(isset($_GET['txtID'])){ // If the key 'txtID' exists in the $_GET array
    $sentencia=$conexion->prepare("SELECT * FROM `tbl_servicios` WHERE ID=:ID"); // Prepare the query
    $sentencia->bindParam(':ID', $_GET['txtID']);
    $sentencia->execute();

    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    // We need to fetch the data and we are going to receive the information for every id
    $icono = $registro['icono'];
    $titulo = $registro['titulo'];
    $descripcion = $registro['descripcion'];
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