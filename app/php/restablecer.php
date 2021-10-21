<?php

    include "./conexion.php";

    $email = $_POST["email"];

    $bytes = random_bytes(5);
    $token =bin2hex($bytes);
    include "mail_reset.php";

    if($enviado)
    {
        $conexion -> query("insert into passwords(email, token, codigo)
        values ('$email','$token','$codigo_auth') ") or die($conexion -> error);
        //echo '<p> Verifica tu Email para restablecer tu contraseña </p>';
    }

    


?>