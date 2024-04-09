<?php 
    include("../../bd.php");

    $id = $usuario = $correo = $password = '';

    if(isset($_GET['txtID'])){ // If the key 'txtID' exists in the $_GET array
        $sentencia=$conexion->prepare("SELECT * FROM `tbl_usuarios` WHERE id=:ID"); // Prepare the query
        $sentencia->bindParam(':ID', $_GET['txtID']);
        $sentencia->execute();
    
        $registro=$sentencia->fetch(PDO::FETCH_LAZY);
        // We need to fetch the data and we are going to receive the information for every id
        $id = $registro['id'];
        $usuario = $registro['usuario'];
        $correo = $registro['correo'];
        $password = $registro['password'];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['txtID'];
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        $sentencia = $conexion->prepare("UPDATE `tbl_usuarios` SET `usuario` = 'EZE122', `password` = 'eze222', `correo` = 'eze321' WHERE `tbl_usuarios`.`id` = 15
        ");
        $sentencia->execute();
    
        header("Location: index.php"); // Redirect to the index page after successful update
    }
    

    include("../../templates/header.php");

?>
<div class="card">
    <div class="card-header">Editar usuario</div>
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
                value="<?php echo $usuario; ?>"
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
                value="<?php echo $correo; ?>"
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
                value="<?php echo $password; ?>"
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