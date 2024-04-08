<?php 
    include("../../templates/header.php");
?>
Listar servicios


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
                    <th scope="col">Iconos</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>1</td>
                    <td>fa-book</td>
                    <td>tutorial</td>
                    <td>servicios de tutorial</td>
                    <td>Editar | Eliminar</td>
                </tr>
             
            </tbody>
        </table>
    </div>
    
    </div>
</div>

<?php 
    include("../../templates/footer.php");
?>