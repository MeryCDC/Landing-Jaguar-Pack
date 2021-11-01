<!DOCTYPE html>
<html lang="en">

<head>
    <title>Iniciar Sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/LOGOCOMPRAS.png">
    <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="login/css/util.css">
    <link rel="stylesheet" type="text/css" href="login/css/main.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">

            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="login/images/logo3.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="php/login.php">
                    <span class="login100-form-title">
                        Iniciar Sesión
                    </span>

                    <div class="wrap-input100 validate-input"
                        data-validate="Ingresa un correo electrónico, ej. ejemplo@gmail.com)">
                        <input class="input100" type="text" name="email" placeholder="Correo Electrónico">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Ingresa una contraseña">
                        <input class="input100" type="password" name="pass" placeholder="Contraseña">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
					<?php if(isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                    <div class="wrap-input100 validate-input">
                        <small id="passwordHelp" class="text-danger">
							<center>¡Correo o contraseña incorrecta!</center> 
                        </small>
                    </div> 
					<?php endif; ?>
                    <?php if(isset($_GET['info']) && $_GET['info'] == 'true'): ?>
                    <div class="wrap-input100 validate-input">
                        <small id="passwordHelp" class="text-success">
							<center>¡Contraseña cambiada correctamente!</center> 
                        </small>
                    </div> 
					<?php endif; ?>
                    <?php if(isset($_GET['inforegistro']) && $_GET['inforegistro'] == 'true'): ?>
                    <div class="wrap-input100 validate-input">
                        <small id="passwordHelp" class="text-success">
							<center>¡Tú cuenta ha sido verificada, ya puedes iniciar sesión!</center> 
                        </small>
                    </div> 
					<?php endif; ?>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Iniciar Sesión
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="restablecer.php">
                            ¿Olvidó su contraseña?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="registro.php">
                            Regístrate en Jaguar Pack 
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="login/vendor/bootstrap/js/popper.js"></script>
    <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="login/vendor/select2/select2.min.js"></script>
    <script src="login/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <script src="login/js/main.js"></script>
</body>

</html>