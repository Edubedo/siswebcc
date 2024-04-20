<!DOCTYPE html>
<html lang="es">

<head>
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
     <!-- Navbar Inicio -->
     <?php include("./templates/header.php");
?>
    <!-- Navbar Fin -->


    <!-- Page Header Inicio -->
    <div class="mb-5 container-fluid page-header position-relative overlay-bottom">
        <div class="pt-0 d-flex flex-column align-items-center justify-content-center pt-lg-5" style="min-height: 400px">
            <h1 class="mt-0 mb-3 text-white display-4 mt-lg-5 text-uppercase">Contactos</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="index.php">P&aacute;gina Principal</a></p>
                <p class="px-2 m-0 text-white">/</p>
                <p class="m-0 text-white">Contacto</p>
            </div>
        </div>
    </div>
    <!-- Page Header Fin -->


    <!-- Contact Inicio -->
    <div class="pt-5 container-fluid">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contactanos</h4>
                <h1 class="display-4">Responsable del Centro de Computo</h1>
            </div>
            <div class="px-3 pb-2 row">
                <div class="mb-3 text-center col-sm-4">
                    <i class="mb-3 fa fa-2x fa-map-marker-alt text-primary"></i>
                    <h4 class="font-weight-bold">Bachillerato 8</h4>
                    <p>Manzanillo, M&eacute;xico


                    </p>
                </div>
                <div class="mb-3 text-center col-sm-4">
                    <i class="mb-3 fa fa-2x fa-phone-alt text-primary"></i>
                    <h4 class="font-weight-bold">Tel&eacute;fono</h4>
                    <p></p>+52 3141172123
                </div>
                <div class="mb-3 text-center col-sm-4">
                    <i class="mb-3 far fa-2x fa-envelope text-primary"></i>
                    <h4 class="font-weight-bold">Correo</h4>
                    <p>msilvestre@ucol.mx</p>
                </div>
            </div>
            <div class="row">
                <div class="pb-5 col-md-6">
                    <iframe style="width: 100%; height: 443px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15084.827407510706!2d-104.32285323494948!3d19.05464086547173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d59e6574a7dd%3A0x8c7f4de7ba7dc36b!2sTechnical%20High%20School%20No.%208%2C%209%20and%2010%20University%20of%20Colima!5e0!3m2!1sen!2smx!4v1713203573452!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="pb-5 col-md-6">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="p-4 bg-transparent form-control" id="name" placeholder="Tu nombre"
                                    required="required" data-validation-required-message="Porfavor registra tu Nombre" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="p-4 bg-transparent form-control" id="email" placeholder="Tu Correo"
                                    required="required" data-validation-required-message="Porfavor registra tu Correo" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="p-4 bg-transparent form-control" id="subject" placeholder="Descripci&oacute;n breve"
                                    required="required" data-validation-required-message="Porfavor registra una Descripci&oacute;n breve" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="px-4 py-3 bg-transparent form-control" rows="5" id="message" placeholder="Mensaje"
                                    required="required"
                                    data-validation-required-message="Porfavor registra tU Mensaje"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="px-5 py-3 btn btn-primary font-weight-bold" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Fin -->


      <!-- Footer Inicio -->
      <?php include("./templates/footer.php");?>
    <!-- Footer Fin -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
       <?php include("./templates/librerias-js.php");?>

</body>

</html>