<?php 
    include "./conexion.php";
    $email =$_POST['email'];
    $token =$_POST['token'];
    $codigo =$_POST['codigo'];
    $res=$conexion->query("select * from passwords where email='$email' and token='$token' and codigo=$codigo")or die($conexion->error);
    $correcto=false;


    if(mysqli_num_rows($res) > 0){
        $fila = mysqli_fetch_row($res);
        $fecha =$fila[4];
        $fecha_actual=date("Y-m-d h:m:s");
        $seconds = strtotime($fecha_actual) - strtotime($fecha);
        $minutos=$seconds / 60;
       /* if($minutos > 10 ){
            echo "token vencido";
        }else{
            echo "todo correcto";
        }*/
        $correcto=true;
    }else{
        $correcto=false;
    }

    if($correcto){
        header("Location: ../verificartoken.php?email=".$email);
    }
    else{
        header("Location: ../reset.php?email=".$email."&token=".$token."&error=true");
    }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar password </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:15%">
            <?php if($correcto){ ?>
                <form class="col-3" action="./cambiarpassword.php" method="POST">
                    <h2>Restablecer Password</h2>
                    <div class="mb-3">
                        <label for="c" class="form-label">Nuevo Password</label>
                        <input type="password" class="form-control" id="c" name="p1">
                    
                    </div>
                    <div class="mb-3">
                        <label for="c" class="form-label">Confirmar Password</label>
                        <input type="password" class="form-control" id="c" name="p2">
                        <input type="hidden" class="form-control" id="c" name="email" value="<?php echo $email?>">

                    </div>
                
                    <button type="submit" class="btn btn-success">Cambiar</button>
                </form>
            <?php }else{ ?>
                <div class="alert alert-danger" >C��digo incorrecto o vencido</div>
            <?php } ?>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html> -->
<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restablecer contraseña</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../../images/LOGOCOMPRAS.png">
    <link rel="stylesheet" type="text/css" href="../login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../login/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../login/css/util.css">
    <link rel="stylesheet" type="text/css" href="../login/css/main.css">
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login">
                <?php if($correcto){ ?> 
                <form class="form validate-form" method="POST" action="./cambiarpassword.php">
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
                <?php }
                else{ ?>
                <div class="alert alert-danger">Codigo incorrecto o vencido</div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <script src="js/main.js"></script>
</body>

</html> -->