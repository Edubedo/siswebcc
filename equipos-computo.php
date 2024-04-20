<!DOCTYPE html>
<html lang="es">

<head>
    <title>SISWEBCC | Sistema de prestamo de equipos de computo</title>
    <!-- Meta -->
    <?php include("./templates/etiquetas-meta.php"); ?>
    <!-- Icono -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Rel Bootstrap -->
    <?php include("./templates/librerias-head.php"); ?>
    <!-- Estilos -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Inicio -->
    <?php include("./templates/header.php");
?>
    <!-- Navbar Fin -->

    <!-- Page Header Inicio -->
    <div class="mb-5 container-fluid page-header position-relative overlay-bottom">
        <div class="pt-0 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 400px">
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Menu</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="index.php">P&aacute;gina Principal</a></p>
                <p class="px-2 m-0 text-white">/</p>
                <p class="m-0 text-white">Menu</p>
            </div>
        </div>
    </div>
    <!-- Page Header Fin -->


    <!-- Menu Inicio -->
    <div class="pt-5 container-fluid">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu de los Equipos</h4>
                <h1 class="display-4">Equipos de Comput&oacute;</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Disponibles </h1>
                    <div class="mb-5 row align-items-center">
                        <div class="col-4 col-sm-3">
                            <img class="mb-3 w-100 circle mb-sm-0" src="dell roja.jpg" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Laptop Dell Roja</h4>
                            <p class="m-0">La laptop Dell roja es un dispositivo llamativo que combina un diseño elegante con un rendimiento confiable.</p>
                        </div>
                    </div>
                    <div class="mb-5 row align-items-center">
                        <div class="col-4 col-sm-3">
                            <img class="mb-3 w-100 circle mb-sm-0" src="lenovo negra opaco.jpg" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Laptop Lenovo Negra Opaco</h4>
                            <p class="m-0">La laptop Lenovo Negra Opaco es un dispositivo elegante y versátil, diseñado para ofrecer un rendimiento confiable en un formato compacto.  </p>
                        </div>
                    </div>
                    <div class="mb-5 row align-items-center">
                        <div class="col-4 col-sm-3">
                            <img class="mb-3 w-100 circle mb-sm-0" src="lenovo negra.jpg" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Laptop Lenovo Color Negro</h4>
                            <p class="m-0">
                                La laptop Lenovo de color negro es una opción clásica y elegante para aquellos que buscan un dispositivo confiable y funcional. Con un diseño atemporal, esta laptop ofrece un equilibrio perfecto entre estilo y rendimiento. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">No Disponibles / Reparaci&oacute;n</h1>
                    <div class="mb-5 row align-items-center">
                        <div class="col-4 col-sm-3">
                            <img class="mb-3 w-100 circle mb-sm-0" src="laptop abierta 3.jpg" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Laptop Huawei MateBook D15</h4>
                            <p class="m-0">La laptop Huawei MateBook D15 es una opción moderna y sofisticada para usuarios que buscan estilo y rendimiento en un solo dispositivo</p>
                        </div>
                    </div>
                    <div class="mb-5 row align-items-center">
                        <div class="col-4 col-sm-3">
                            <img class="mb-3 w-100 circle mb-sm-0" src="compu abierta" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Laptop Acer Chromebook 315</h4>
                            <p class="m-0">La laptop Acer Chromebook 315 es una opción moderna y eficiente para aquellos que buscan simplicidad y rendimiento en un dispositivo portátil.</p>
                        </div>
                    </div>
                    <div class="mb-5 row align-items-center">
                        <div class="col-4 col-sm-3">
                            <img class="mb-3 w-100 circle mb-sm-0" src="compu blanca.jpg" alt="">
                            
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Microsoft Surface Pro 6</h4>
                            <p class="m-0">
                                La Microsoft Surface Pro 6 es una tablet convertible en laptop que combina elegancia y rendimiento en un dispositivo versátil. Con un diseño delgado y moderno, esta Surface Pro ofrece la portabilidad de una tablet con la potencia de una laptop.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu Fin -->


    <!-- Footer Inicio -->
    <?php include("./templates/footer.php");?>
    <!-- Footer Fin -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
       <?php include("./templates/librerias-js.php");?>

</body>

</html>