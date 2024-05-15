<?php
// $url_admin="https://siswebcc-d1eecd8d184b.herokuapp.com/admin/";
$url_admin = "http://localhost/compudc/admin/";
// $url_blog="https://siswebcc-d1eecd8d184b.herokuapp.com/"
$url_blog = "http://localhost/compudc/"
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    .instagram-icon {
        background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>

<div class="px-0 pt-1 mt-5 text-white container-fluid footer position-relative">
    <div class="pt-5 mx-0 mt-4 row px-sm-3 px-lg-5">
        <div class="mb-5 col-lg-4"> <!-- Cambiado de col-lg-3 a col-lg-4 -->
            <h4 class="mb-4 text-white text-uppercase" style="letter-spacing: 3px;">Datos de Contacto</h4>
            <p><i class="mr-2 fa fa-map-marker-alt"></i>Bachillerato Tecnico No. 8, 9 y 10 Universidad de Colima</p>
            <p><i class="mr-2 fa fa-phone-alt"></i>+52 3141172123</p>
            <p class="m-0"><i class="mr-2 fa fa-envelope"></i>msilvestre@ucol.mx</p>
        </div>
        <div class="mb-5 col-lg-4"> <!-- Cambiado de col-lg-3 a col-lg-4 -->
            <h4 class="mb-4 text-white text-uppercase" style="letter-spacing: 3px;">Privacidad</h4>
            <a href="<?php echo $url_blog ?>/politica-privacidad.php" class="nav-item nav-link">Aviso de Privacidad</a>
            <a href="<?php echo $url_blog ?>/terminos-condiciones.php" class="nav-item nav-link">Terminos y Condiciones</a>
        </div>
        <div class="mb-5 col-lg-4"> <!-- Cambiado de col-lg-3 a col-lg-4 -->
            <h4 class="mb-4 text-white text-uppercase" style="letter-spacing: 3px;">Redes sociales</h4>
            <div class="w-100">
                <a href="https://www.youtube.com/@UniversidaddeColimaTV" class="nav-item nav-link"><i class="fab fa-youtube" style="color: red;"></i> Youtube</a>
                <a href="https://www.facebook.com/UdeC.oficial/?locale=es_LA" class="nav-item nav-link"><i class="fab fa-facebook-f" style="color: blue;"></i> Facebook</a>
                <a href="https://twitter.com/udec_oficial" class="nav-item nav-link"><i class="fab fa-twitter" style="color: black;"></i> X</a>
                <a href="https://www.instagram.com/udec.oficial/" class="nav-item nav-link"><i class="fab fa-instagram instagram-icon"></i> Instagram</a>
            </div>
        </div>
    </div>
    <div class="py-4 mt-4 text-center text-white container-fluid border-top px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="mb-2 text-white">Copyright &copy;Universidad de Colima. Todos los derechos reservados.</a></p>
    </div>
</div>