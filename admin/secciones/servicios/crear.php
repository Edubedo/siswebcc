<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.php");
    exit();
}
include("../../bd.php");

// Obtener los estatus de la tabla tbl_estatus
$query = $conexion->query("SELECT * FROM tbl_estatus");
$estatus = $query->fetchAll(PDO::FETCH_ASSOC);

// Obtener los usuarios de la tabla tbl_usuarios
$queryUsuarios = $conexion->query("SELECT * FROM tbl_usuarios");
$usuarios = $queryUsuarios->fetchAll(PDO::FETCH_ASSOC);

if($_POST) {
    $icono = (isset($_POST['icono']))?$_POST['icono']:"";
    $titulo = (isset($_POST['titulo']))?$_POST['titulo']:"";
    $descripcion = (isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $estatus = (isset($_POST['estatus']))?$_POST['estatus']:"";
    $encargado = (isset($_POST['encargado']))?$_POST['encargado']:"";
    $horario = (isset($_POST['horario']))?$_POST['horario']:"";
    
    echo $icono;
    echo $titulo;
    echo $descripcion;
    echo $estatus;
    echo $encargado;
    
    $sentencia=$conexion->prepare("INSERT INTO `tbl_servicios` (`ID`, `icono`, `titulo`, `descripcion`, `estado`, `responsable`, `horario`) 
    VALUES (NULL, '$icono', '$titulo', '$descripcion', '$estatus', '$encargado', '$horario');");
    $sentencia->execute();
 
    header("Location: index.php");
}
include("../../templates/header.php");
?>

<!DOCTYPE html>
<html lang="es"> 
    <head>
        <title>Administrador compudc</title>
            <!-- Meta -->
        <?php include("./templates/etiquetas-meta.php"); ?>
            <!-- Icono -->
        <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <!-- Rel Bootstrap -->


        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <?php include("./templates/librerias-head.php"); ?>

        <link rel="stylesheet" href="../../../css/style.min.css">

        <style>
            .card {
                margin: 1rem;
            }

            .card h2 {
                padding: 1rem;
            }
        </style>
    </head>
   
<body class="d-flex flex-column min-vh-100">
        <!-- Navbar Inicio -->
    <?php include("./templates/header.php");?>
    <!-- Navbar Fin -->

  <!-- Página Encabezado Inicio -->
  <div class="mb-5 container-fluid page-header position-relative">

<div class="pt-1 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 200px">
    <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Crear servicio</h1>
    <div class="d-inline-flex mb-lg-5">
       
    </div>
</div>

</div> 
<!-- Página Encabezado Fin -->

<div class="card flex-grow-1">

<!-- Listar Servicios -->
<div class="card">
    <h2 class="card-header">Formulario Servicio</h2>
    <div class="card-body">
    <form action="" enctype="multipart/form-data" method="post">
    <div class="mb-3">
            <label for="titulo" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                name="titulo"
                id="titulo"
                aria-describedby="helpId"
                placeholder="Nombre"
                required="true"

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
                required="true"

            />
        </div>

        <div class="mb-3">
    <label for="encargado" class="form-label">Encargado</label>
    <select class="form-control" name="encargado" id="encargado" required="true">
        <?php foreach($usuarios as $usuario): ?>
            <option value="<?php echo $usuario['nombre_completo']; ?>"><?php echo $usuario['nombre_completo']; ?></option>
        <?php endforeach; ?>
    </select>
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
                required="true"

            />


        </div> 

        <div class="mb-3">
    <label for="imagen" class="form-label">Imagen</label>
    <input
        type="file"
        class="form-control"
        name="imagen"
        id="imagen"
        accept="image/*"
        required="true"
        onchange="previewImage(event)"
    />
    <img id="preview" src="" alt="Imagen de previsualización" style="max-width: 200px; margin-top: 10px;">
</div>


<div class="mb-3">
    <label for="estatus" class="form-label">Estatus</label>
    <select class="form-control" name="estatus" id="estatus" required="true">
        <?php foreach($estatus as $estado): ?>
            <option value="<?php echo $estado['nombre']; ?>"><?php echo $estado['nombre']; ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="mb-3">
    <label for="horario" class="form-label">Horario</label>
    <input type="datetime-local" class="form-control" name="horario" id="horario" required="true">
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
    </div>

    <script>
        function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
    </script>

   <!-- Footer Inicio -->
   <?php include("../../../templates/footer.php"); ?>
    <!-- Footer Fin -->

<?php include("./templates/librerias-js.php"); ?>
</body>
</html>
  


