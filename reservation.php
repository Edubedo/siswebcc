<!DOCTYPE html>
<html lang="es">

<head>
    <title>SPEC | Sistema de prestamo de equipos de computo</title>
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
    <!-- Navbar Start -->
    <?php include("./templates/header.php");
?>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="mb-5 container-fluid page-header position-relative overlay-bottom">
        <div class="pt-0 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 400px">
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Apartado de Equipos</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">P&aacute;gina Principal</a></p>
                <p class="px-2 m-0 text-white">/</p>
                <p class="m-0 text-white">Apartado de Equipos</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Reservation Start -->
    <div class="py-5 container-fluid">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="my-5 col-lg-6 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">Utilizando tu Credencial Universitaria</h1>
                                <h1 class="text-white">Tienes derecho al uso de los Equipos de computo.</h1>
                            </div>
                            <p class="text-white">El metodo de Apartado y/o Reservaci&oacute;n de Equipos de manera Presencial es utilizar tu Credencial Universitaria e ir al Centro de Computaci&oacute;n y preguntar si tienen algun Equipo disponible.</p>
                            <ul class="m-0 text-white list-inline">
                                <p class="text-white">El metodo de Apartado y/o Reservaci&oacute;n de Equipos de manera Virtual es registrarte en la parte de abajo utilizando tu Correo Institucional y llenar los Espacios que se te solicitan.</p>
                                <ul class="m-0 text-white list-inline">
                                    <h1 class="text-white">Indicaciones que debes seguir...</h1>
                                <li class="py-2"><i class="mr-3 fa fa-check text-primary"></i>Utilizar los Equipos de manera coherente y cuidadosa.</li>
                                <li class="py-2"><i class="mr-3 fa fa-check text-primary"></i>Unicamente puedes utilizar los Equipos dentro del horario establecido por el/la encargad@.</li>
                                <li class="py-2"><i class="mr-3 fa fa-check text-primary"></i>En caso de algun imprevisto golpe o rayon hacia los equipos se le hara un llamado a que se haga responsable por las molestias ocasionadas hacia los equipos.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5 text-center" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="mt-5 mb-4 text-white">Anota tu Informaci&oacute;n</h1>
                            <form class="mb-5">
                                <div class="form-group">
                                    <input type="text" class="p-4 bg-transparent form-control border-primary" placeholder="Nombre"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="p-4 bg-transparent form-control border-primary" placeholder="Correo Institucional"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" class="p-4 bg-transparent form-control border-primary datetimepicker-input" placeholder="Fecha" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" class="p-4 bg-transparent form-control border-primary datetimepicker-input" placeholder="Horario" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="px-4 bg-transparent custom-select border-primary" style="height: 49px;">
                                        <option selected>N&uacute;mero de Equipo</option>
                                        <option value="1">Equipo 1</option>
                                        <option value="2">Equipo 2</option>
                                        <option value="3">Equipo 3</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <button class="py-3 btn btn-primary btn-block font-weight-bold" type="submit">Mandar Tu Informaci&oacute;n</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->


    <!-- Footer Start -->
    <?php include("./templates/footer.php");?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>