<?php
    require_once("conexion.php");
    $email =$_POST['email'];
    $codigo =$_POST['codigo'];
    $res = $conexion->query("select * from usuarios where email='$email' and codigo='$codigo' ")or die($conexion->error);
    if( mysqli_num_rows($res) > 0 ){
        $conexion->query("update usuarios set confirmado = '1' where email = '$email' ");
        header("Location: ../login.php?inforegistro=true");
        /*echo '
        <!DOCTYPE html>
        <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
            <link rel="stylesheet" href="../css/style.css">
            </head>
            <body>

            <!-- Navigation-->
            <div>
            <nav class="navbar navbar-expand-lg bg-light text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="../index.php"> <img class="logo-navbar"
                        src="../assets/imagenes/logo/logo.png" alt="" srcset=""> </a>
                <button
                    class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-success text-white rounded"
                    type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menú
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto text-white">
                        <li class="nav-item mx-0 mx-lg-1 ">
                            <a href="../login.php">
                                <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                            </a>
                        </li>

                        <li class="nav-item mx-0 mx-lg-1 color_enlace">
                            <a href="../register.php">
                                <i class="fa fa-user-plus"></i> Regístrate
                            </a>
                        </li>

                        <li class="nav-item mx-0 mx-lg-1 color_enlace">
                            <a href="">
                                <i class="fas fa-dollar-sign"></i> Cotiza
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
            <div class="row justify-content-md-center" style="margin-top:7%">
            <form class="col-3" method="POST" action="../php/login.php">
                <h2>Iniciar Sesión</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="ejemplo@hotmail.com">
                    
                </div> 
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                </div>
                <a href="../restablecer.php">Olvidé mi contraseña</a> <br>
                <button type="submit" class="btn btn-success">Ingresar</button>

                <br> <br>

                <div class="container">
                <div class="alert alert-success" role="alert">
                Tú cuenta ha sido verificada, ya puedes iniciar sesión
            </div>
            </form>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        </body>
        </html>'; */
    }else{
        header("Location: ../confirm.php?email=".$email."&error=true");
/*         echo 
        '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login</title>
            <!-- CSS only -->
        
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
                integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        
        <link rel="stylesheet" href="../css/style.css">
        </head>
        <body>
        
            <!-- Navigation-->
            <div>
                <nav class="navbar navbar-expand-lg bg-light text-uppercase fixed-top" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand js-scroll-trigger" href="../index.php"> <img class="logo-navbar"
                                src="../assets/imagenes/logo/logo.png" alt="" srcset=""> </a>
                        <button
                            class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-success text-white rounded"
                            type="button" data-toggle="collapse" data-target="#navbarResponsive"
                            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            Menú
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto text-white">
                                <li class="nav-item mx-0 mx-lg-1 ">
                                    <a href="../login.php">
                                        <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                                    </a>
                                </li>
        
                                <li class="nav-item mx-0 mx-lg-1 color_enlace">
                                    <a href="../register.php">
                                        <i class="fa fa-user-plus"></i> Regístrate
                                    </a>
                                </li>
        
                                <li class="nav-item mx-0 mx-lg-1 color_enlace">
                                    <a href="">
                                        <i class="fas fa-dollar-sign"></i> Cotiza
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        
            <br> <br> <br> <br>
        
        
            <div class="container">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">El Código Ingresado es Invalido o ya está expirado </h4>
                        <p> 
                            Hola, Por favor revisa tu Correo Electrónico para poder validar que el correo electrónico que ingresaste existe.
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
        
            <br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> 
        
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
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        </body>
        </html>'; */
    }
?>