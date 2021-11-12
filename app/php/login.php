<?php
    require_once("conexion.php");
    $email =$_POST['email'];
    $password = sha1($_POST['pass']);
    $res = $conexion->query("select * from usuarios where email='$email' and password='$password' and confirmado = '1' ")or die($conexion->error);
    if( mysqli_num_rows($res) > 0 ){
        //Se crea sesión para posteriormente hacer búsquedas en BD
        $result = $conexion->query(" select * from usuarios where email='$email' ");
        $obj = $result->fetch_object();
        $confirmar_datos_usuario = $obj->confirmar_datos;
        $id_usuario = $obj->id;
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['id_usuario'] = $id_usuario;

        header("Location: ../home.php");
    }else{
        header("Location: ../login.php?error=true");
    }
?>