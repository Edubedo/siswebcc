<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
include("../../bd.php"); // We need to add the db

if(isset($_GET['txtID'])){ // If the key 'txtID' exists in the $_GET array
    $sentencia=$conexion->prepare("DELETE FROM `tbl_historial_prestamos` WHERE ID=:ID"); // Prepare the query
    $sentencia->bindParam(':ID', $_GET['txtID']);
    $sentencia->execute();
}
 $sentencia=$conexion->prepare("SELECT * FROM `tbl_historial_prestamos`");
 $sentencia->execute();
    $lista_servicios=$sentencia->fetchAll(PDO::FETCH_ASSOC); // We need to fetch the data
     
    include("../../templates/header.php");
?>
<h2>Listar historial de prestamos</h2>


<div class="card">
    <div class="card-header">
    <a
        name=""
        id=""
        class="btn btn-primary"
        href="crear.php"
        role="button"
        >Agregar registro</a
    >
        
    </div>
    <div class="card-body">
    <div
        class="table-responsive-sm"
    >
        <table
            class="table"
        > 
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Asunto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha  Creación</th>
                </tr>
            </thead>
            <tbody>
                <!-- Go through all records -->
                <?php foreach($lista_servicios as $registro) {?>
                    <tr class="">
                    <td><?php echo $registro['ID'] ?></td>
                    <td><?php echo $registro['s_asunto'] ?></td>
                    <td><?php echo $registro['s_descripcion'] ?></td>
                    <td><?php echo $registro['d_fecha_creacion'] ?></td>
                    <td>
                    <a
                            name=""
                            id=""
                            class="btn btn-info"
                            href="editar.php?txtID=<?php echo $registro['ID'] ?>"
                            role="button"
                            >Editar</a
                        >
                        |
                        <a
                            name=""
                            id=""
                            class="btn btn-danger"
                            href="index.php?txtID=<?php echo $registro['ID'] ?>"
                            role="button"
                            >Borrar</a
                        >
                        
                    </td>
                </tr>
             
               <?php } ?>
              
            </tbody>
        </table>
    </div>
    
    </div>
</div>

<?php 
    include("../../templates/footer.php");
?>