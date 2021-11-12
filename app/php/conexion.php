<?php 
    $conexion = new mysqli('localhost','root','','control_jaguar');
    
    //$conexion = new mysqli('localhost','contrpd3_desarrollo','DeveloperAndT1*','contrpd3_control_compras'); 
    
    //$conexion = new mysqli('localhost','contrpd3_control_jaguar','J4Gu4RP4ck*','contrpd3_control_jaguar');               //PRODUCCIÓN

    if($conexion-> connect_error){
        die('No se pudo conectar al servidor');
    }

?>