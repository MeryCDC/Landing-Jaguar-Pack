<?php 
   include "./conexion.php";
   if( isset($_POST['nombre'] ) && isset($_POST['email']) && isset($_POST['pass'] ) 
    && isset($_POST['pass2'] )){

        $email=$_POST['email'];

        $result = $conexion->query("select id from usuarios where email='$email'");

        if( mysqli_num_rows($result) > 0 )
        {
            //echo "Existe en BD";
            header("Location: ../registro2.php?error=true");
        }
        else
        {
            //echo "No existe";

            if($_POST['pass'] == $_POST['pass2'] ){
                $name=$_POST['nombre'];
                $pass=sha1($_POST['pass']);
                include "./mail.php";
                if($enviado){
                    $conexion->query("insert into usuarios (nombre, email,password, confirmado ,codigo) values('$name','$email','$pass','no','$codigo_auth')  ")or die($conexion->error);
                    header("Location: ../mensaje.php"); 
                }else{
                    echo "no se pudo enviar el email";
                }
            }else{
                header("Location: ../registro.php?error=true");
            }
        }


    }
?>