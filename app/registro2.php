<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar Sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="../images/LOGOCOMPRAS.png">
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
				<form class="form validate-form" method="POST" action="./php/registrar.php">
					<span class="login100-form-title">
						Registro
					</span>
                    <div class="wrap-input100 validate-input"
                        data-validate="Ingresa un nombre">
                        <input class="input100" type="text" id="Nombre" name="nombre" placeholder="Nombre">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input"
                        data-validate="Ingresa un correo electrónico, ej. ejemplo@gmail.com)">
                        <input class="input100" id="exampleInputEmail1" name="email" placeholder="Correo Electrónico">
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
                    <div class="wrap-input100 validate-input" data-validate="Ingresa una contraseña">
                        <input class="input100" type="password" name="pass2" placeholder="Repite tu contraseña">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                        
					<?php if(isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                    <div class="wrap-input100 validate-input">
                        <small id="passwordHelp" class="text-danger">
							<center>¡Este correo electrónico ya está en uso, intente con otro!</center> 
                        </small>
                    </div>
					<?php endif; ?>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">Registrar</button>
					</div>
					<div class="text-center p-t-12">
						<a class="txt2" href="https://controldecompras.com.mx/compras/login/">
						Regresar al login
						</a>
					</div>
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