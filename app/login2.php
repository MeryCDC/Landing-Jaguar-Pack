<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Control de Compras</title>

    <!-- Loading Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/pe-icon-7-stroke.css">
    <link href="../css/style-magnific-popup.css" rel="stylesheet">


    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="../images/LOGOCOMPRAS.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>

    <!--begin header -->
    <header class="header">

        <!--begin navbar-fixed-top -->
        <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">

            <!--begin container -->
            <div class="container">

                <!--begin logo -->
                <a class="navbar-brand" href=""> <img class="logo-navbar"
                        src="../images/logo.png" width="150"> </a>
                <!--end logo -->

                <!--begin navbar-toggler -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <!--end navbar-toggler -->

                <!--begin navbar-collapse -->
                <div class="navbar-collapse collapse" id="navbarCollapse" style="">

                    <!--begin navbar-nav -->
                    <ul class="navbar-nav ml-auto">

                        <li><a href="#home">Inicio</a></li>

                        <li><a href="#comoFunciona">¿Cómo funciona?</a></li>

                        <li><a href="#cotiza"> Cotiza tu envío</a></li>

                        <li class="discover-link"> <a href="" onclick="location.href='https://controldecompras.com.mx'" class="discover-btn">Regístrate</a></li>

                    </ul>
                    <!--end navbar-nav -->

                </div>
                <!--end navbar-collapse -->

            </div>
            <!--end container -->

        </nav>
        <!--end navbar-fixed-top -->

    </header>
    <!--end header -->
    
    <!--begin home section -->
    <section class="home-section2" id="home">

        

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                

                <!--begin col-md-5-->
                <div class="col-md-5 offset-md-4 margin-top-12">

                    <!--begin register-form-wrapper-->
                    <div class="register-form-wrapper wow bounceIn" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                        <h3>Inicia Sesión en Control de Compras</h3>


                        <!--begin form-->
                        <div>

                            <!--begin register form-->

                            <form class="" method="POST" action="compras/php/registrar.php">
                                <div class="register-form register">

                                    <input type="email" class="register-input name-email" id="exampleInputEmail1"
                                        name="email" placeholder="  Correo Electrónico *">

                                    <input type="password" class="register-input password-input"
                                        id="exampleInputPassword1" name="pass" placeholder="  Contraseña *">

                                    <a href="">Olvidé mi contraseña</a>

                                </div>

                                <input value="Iniciar Sesión" class="register-submit" type="submit">
                            </form>
                            <!--end register form -->
                            

                        </div>
                        <!--end form-->
                        

                    </div>
                    <!--end register-form-wrapper-->
                    

                </div>
                <!--end col-md-5-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end home section -->





    

    <!--begin footer -->
    <div class="footer" id="footer-login">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-5 -->
                <div class="col-md-5">

                    <p> <a href="https://www.controldecarga.com/aviso-de-privacidad" target="_blank">Avíso de
                            Privacidad</a></p>

                </div>
                <!--end col-md-5 -->

                <!--begin col-md-2 -->
                <div class="col-md-2"></div>
                <!--end col-md-2 -->

                <!--begin col-md-5 -->
                <div class="col-md-5">

                    <!--begin footer_social -->
                    <ul class="footer_social">

                        <li>Siguenos en nuestras Redes Sociales:</li>


                        <li><a href="https://www.facebook.com/ControlDeCargaPaqueteria/" target="_blank"><i
                                    class="fab fa-facebook-square"></i></a></li>

                        <li><a href="https://www.instagram.com/control.compras.pbox/" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>

                                


                    </ul>
                    <!--end footer_social -->

                </div>
                <!--end col-md-5 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </div>
    <!--end footer -->


    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo-min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
        <script src="js/app.js"></script>


</body>

</html>