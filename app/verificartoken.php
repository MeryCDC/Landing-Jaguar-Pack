<?php 
if( isset($_GET['email'])){
    $email=$_GET['email'];
}else{
    header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Restablecer Contraseña - Control de Compras</title>
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
                <form class="form validate-form" method="POST" action="./php/cambiarpassword.php">
                    <span class="login100-form-title">
                        Restablecer Contraseña
                    </span>
                    <div class="wrap-input100 validate-input" data-validate = "Ingresa una contraseña">
						<input class="input100" type="password" id="c" name="p1" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Confirma tu contraseña">
						<input class="input100" type="password"id="c" name="p2" placeholder="Confirma tu contraseña">
						<input type="hidden" class="form-control" id="c" name="email" value="<?php echo $email?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <?php if(isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                    <div class="wrap-input100 validate-input">
                        <small id="passwordHelp" class="text-danger">
							<center>¡Las contraseñas no coinciden!</center> 
                        </small>
                    </div>
					<?php endif; ?>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Restablecer 
                        </button>
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
</body>

</html>