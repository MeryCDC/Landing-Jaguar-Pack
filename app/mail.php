<?php
require_once("registrar.php");
// Varios destinatarios
$para  = $email . ' '; // Para el correo que se está registrando en la base de datos

// título
$título = 'Gracias por Registrarte';

//Código aleatorio
$codigo_auth = rand(1000,9999);

// mensaje
$mensaje = '
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
  
  <h2> Hola '. $name .', ya esta casi lista tu cuenta en Control de Compras.</h2>

  <p>Tu Codigo de Seguridad para Autenticarte en Control de Compras es:</p>

  <p>
    <a
    href="https://controldecompras.com.mx/confirm.php?email='.$email.'">
    Haz clic aqui para validar tu cuenta</a>  
  </p>

  <p>
  <a
  href="http://localhost/Landing-Jaguar-Pack/app/confirm.php?email='.$email.'">
  Haz clic aqui para validar tu cuenta en local</a>  
</p>

  <h2> '. $codigo_auth .' </h2>
  
  

</body>
</html>
';

//redirección: href="https://controldecompras.com.mx/php/confirm.php?email='.$email.'">  (PRODUCCIÓN) 
//href="http://localhost/php/confirm.php?email='.$email.'"> (TESTING)

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'From: Recordatorio <Papercut@user.com>' . "\r\n";
//$cabeceras .= 'From: Recordatorio <info@controldecarga.com.mx>' . "\r\n";               // PRODUCCIÓN
$cabeceras .= 'Content-type: text/html; charset=UTF-8$LE' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
//$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

$enviado = false;

// Enviarlo
if(mail($para, $título, $mensaje, $cabeceras)){
    echo "Se envió el Correo";
    $enviado = true;
}
else{
    echo "Algo falló al momento de envíar el correo electrónico";
}

?>