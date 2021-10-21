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
    href="https://www.jaguarpack.com/app/confirm.php?email='.$email.'">
    Haz clic aqui para validar tu cuenta</a>  
  </p>

  <p>
  <a
  href="http://localhost/Landing-Jaguar-Pack/app/confirm.php?email='.$email.'">
  Haz clic aqui para validar tu cuenta en local</a>  
</p>

  <h2> '. $codigo_auth .' </h2>
  
  <hr>
    
    <h3> Proceso a seguir para hacer uso de Control de Compras </h3>

    <ol>
        <li> Regístrate en nuestro casillero virtual. </li>
        <li> Entra a tus tiendas favoritas, elige tus articulos y solicita que lleguen a la direccion de tu casillero virtual "1119 Santa Isabel AveLaredo, TX 78040, EE. UU". </li>
        <li> Genera una pre-alerta especificando los datos de tu paquete. (esto nos ayudara para poder identificar con facilidad tu paquete). </li>

        <li> Tu paquete llegará a nuestra bodega en Laredo Tx. Nosotros nos comunicaremos contigo. </li>
        <li> Realiza el pago por el servicio de envío, el cual te facilitaremos los datos. </li>
        <li> Enviaremos a tu domicilio tus artículos, mediante diferentes paqueterías.  </li>

        <li> Rastrea tu paquete con los un numero de guía que te asignaremos. </li>
        <li> Recibe tu paquete en tu hogar en México. </li>
    </ol>
</body>
</html>
';

//redirección: href="https://controldecompras.com.mx/php/confirm.php?email='.$email.'">  (PRODUCCIÓN) 
//href="http://localhost/php/confirm.php?email='.$email.'"> (TESTING)

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
//$cabeceras .= 'From: Recordatorio <Papercut@user.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <info@controldecarga.com.mx>' . "\r\n";               // PRODUCCIÓN
$cabeceras .= 'Content-type: text/html; charset=UTF-8$LE' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
//$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

$enviado = false;

// Enviarlo
if(mail($para, $título, $mensaje, $cabeceras)){
    $enviado = true;
}
else{
    echo "Algo falló al momento de envíar el correo electrónico";
}

?>