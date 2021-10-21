<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../images/LOGOCOMPRAS.png">
    <link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css">
    <title>Correo electronico</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
    <nav class="navbar navbar-dark bg-dark text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href=""> <img class="logo-navbar" src="assets/imagenes/logo/logo-blanco.png" alt="" srcset=""> </a>
                <button
                    class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-success text-white rounded"
                    type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menú <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto text-white">
                    <li class="nav-item mx-0 mx-lg-1 ">
                            <a href="../login.php">
                                <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
 -->
<?php $title = "Detalle pre-alerta"; ?>
<?php require_once "layout/headermensaje.php" ?>

<!-- Contenido del mensaje -->
<section class="about-section spad">
    <div class="container">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Se te envió un Correo Electrónico </h4>
            <p>
                Hola, Por favor revisa tu Correo Electrónico para poder validar que el correo electrónico que
                ingresaste
                existe.
                <br>
                Favor de seguir los siguientes pasos:
            <ol>
                <li>Abre tu Correo Electrónico</li>
                <li>Haz clic en el enlace</li>
                <li>Ingresa tu código de autenticación que te enviamos</li>
                <li>Ingresalo en la ventana que te llevará el enlace</li>
                <li>Y listo, ahora puedes Iniciar Sesión en Control de Compras</li>
            </ol>
            </p>
            <hr>
        </div>
<!--         <div class="row">

            <div class="col-lg-8 offset-lg-8 about-text">
                <h2 class="degradado">Compras rapidas, entregas rapidas</h2>
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum euismod nisl ac convallis.
                    Nulla eget mattis sem. Donec nec maximus leo. Donec efficitur lacus a urna auctor, Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit. Sed dictum euismod nisl ac convallis. Nulla eget
                    mattis sem. Donec nec maximus leo. Donec efficitur lacus a urna auctor, Lorem ipsum dolor sit
                    amet.</p>
                <a href="" class="site-btn sb-gradients sbg-line mt-5">Registrate</a>
            </div>
        </div> -->
    </div>
</section>
<!-- Fin del contenido de mensaje -->

<!-- </div>
<br> <br> <br> <br>
<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Se te envió un Correo Electrónico </h4>
        <p>
            Hola, Por favor revisa tu Correo Electrónico para poder validar que el correo electrónico que ingresaste
            existe.
            <br>
            Favor de seguir los siguientes pasos:
        <ol>
            <li>Abre tu Correo Electrónico</li>
            <li>Haz clic en el enlace</li>
            <li>Ingresa tu código de autenticación que te enviamos</li>
            <li>Ingresalo en la ventana que te llevará el enlace</li>
            <li>Y listo, ahora puedes Iniciar Sesión en Control de Compras</li>
        </ol>
        </p>
        <hr>
    </div>
</div>
<br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> -->
<!-- Footer-->
<footer class="footer text-center text-white">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Nuestros Otros Servicios</h4>
                <p class="lead mb-0 contact-color">
                    <a href="https://www.controldecarga.com/" target="_blank">Control de Carga</a>
                </p>
                <p class="lead mb-0 contact-color">
                    <a href="https://www.rapicarga.mx/" target="_blank">Rapi Carga</a>
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Redes Sociales</h4>
                <a class="btn btn-outline-light btn-social mx-1 icon-color"
                    href="https://www.facebook.com/ControlDeCargaPaqueteria/" target="_blank"><i
                        class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1 icon-color"
                    href="https://www.instagram.com/controldecarga/" , target="_blank"> <i
                        class="fab fa-fw fa-instagram"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Contactos</h4>
                <p class="lead mb-0 contact-color" id="contact-mexico">
                    México:
                    <a href="tel:8677141102">867 714 1102</a>
                    .
                </p>

                <p class="lead mb-0 contact-color" id="contact-usa">
                    USA:
                    <a href="tel:18662966816">1 866 296 6816</a>
                    .
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
</body>

</html>