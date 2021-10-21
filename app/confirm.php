<?php
    if(isset($_GET['email'])){
        $email = $_GET["email"];
    }
    else{
        header('location: ./login.php');
    }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifiar Cuenta</title>
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

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-light text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"> <img class="logo-navbar"
                        src="assets/imagenes/logo/logo.png" alt="" srcset=""> </a>
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
                            <a href="login.php">
                                <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                            </a>
                        </li>

                        <li class="nav-item mx-0 mx-lg-1 color_enlace">
                            <a href="register.php">
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
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:15%">
            <form class="col-3" action="./php/verificar.php" method="POST">
                <h2>Verificar Cuenta</h2>
                <div class="mb-3">
                    <label for="c" class="form-label">Ingresa el Código de Seguridad que se ha enviado a tu Correo</label>
                    <input type="number" class="form-control" id="c" name="codigo">
                    <input type="hidden" class="form-control" id="email" name="email" value="<?php echo $email;?>">
                </div>
               
                <button type="submit" class="btn btn-success">Verificar</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html> -->

<!DOCTYPE html> 
<html lang="en">
<head>
	<title>Confirmacion - Control de Compras</title>
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
			<div class="wrap-login">
				<form class="form validate-form" action="./php/verificar.php" method="POST"> 
					<span class="login100-form-title">Verificar Cuenta</span>
                    <p>Ingresa el codigo que enviamos por correo</p>
					<div class="wrap-input100 validate-input" data-validate = "Ingresa el codigo que enviamos por correo">
						<input class="input100" type="number" id="c" name="codigo" placeholder="Ingresa el Código">
						<span class="focus-input100"></span>
						<span class="symbol-input100"><i class="fa fa-key" aria-hidden="true"></i></span>
                        <input type="hidden" class="form-control" id="email" name="email" value="<?php echo $email;?>">
                    </div>
                    <?php if(isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                    <div class="wrap-input100 validate-input">
                        <small id="passwordHelp" class="text-danger">
							<center>¡El Código Ingresado es Invalido o ya está expirado!</center> 
                        </small>
                    </div> 
					<?php endif; ?>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn"> Verificar </button>
					</div>

					<!-- <div class="text-center p-t-12">
						<a class="txt2" href="https://controldecompras.com.mx/compras/login/">
						Regresar al login
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>