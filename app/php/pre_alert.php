<?php

require_once("conexion.php");

if(isset($_POST['txtPeso']) && isset($_POST['txtvalor']) && isset($_POST['txtAlto']) &&
   isset($_POST['txtAncho']) && isset($_POST['txtLargo']) && isset($_POST['txtContenido']) && 
   isset($_POST['txtOrigen']) && isset($_POST['txtTracking'])){

       $peso = $_POST['txtPeso'];
       $valor = $_POST['txtvalor'];
       $alto = $_POST['txtAlto'];
       $ancho = $_POST['txtAncho'];
       $largo = $_POST['txtLargo'];
       $contenido = $_POST['txtContenido'];
       $origen = $_POST['txtOrigen'];
       $tracking = $_POST['txtTracking'];
       $seguro = $_POST['txtPorcentajeSeguro'];
       $idUsuario = $_POST['txtIdUsuarioPrealerta'];
       $ObjectName = new DateTime();

       $resultado_cliente_prealerta = $conexion->query("select id from clientes where id_usuario ='$idUsuario'");
       $obj_cliente = $resultado_cliente_prealerta->fetch_object();
       $id_cliente = $obj_cliente->id;   
        
       if($seguro != 0)
       {
           $resultado_seguro = ($valor * 5) / 100;
           $seguro = 1;
           
           $conexion->query("insert into prealertas (peso, alto, ancho, largo, valor, contenido,
           origen_pagina_web, seguro, porcentaje_del_seguro, status, id_cliente, tracking)
           values('$peso', '$alto', '$ancho', '$largo', '$valor', '$contenido', '$origen', '$seguro', '$resultado_seguro' , 0, '$id_cliente', '$tracking')  ")or die($conexion->error);

           $ultimo = $conexion->insert_id; 

           $conexion->query("insert into estatus (estatus, comentario, id_prealerta)
           values(0, 'Creada por el usuario', ' $ultimo') ")or die($conexion->error);

           //$sql = "INSERT INTO `estatus` (`id`, `estatus`, `comentario`, `fecha_hora`, `id_prealerta`, `id_usuario`) VALUES (NULL, \'0\', NULL, current_timestamp(), \'28\', \'2\')";

           header('location: home.php');
       } else {
           $resultado_seguro = 0;
           $seguro = 0;
           $conexion->query("insert into prealertas (peso, alto, ancho, largo, valor, contenido,
                            origen_pagina_web, seguro, porcentaje_del_seguro, status, id_cliente, tracking)
                            values('$peso', '$alto', '$ancho', '$largo', '$valor', '$contenido', '$origen', '$seguro', '$resultado_seguro' , 0, '$id_cliente', '$tracking')  ")or die($conexion->error);

            $ultimo = $conexion->insert_id; 

            $conexion->query("insert into estatus (estatus, comentario, id_prealerta)
            values(0, 'Creada por el usuario', ' $ultimo') ")or die($conexion->error);

            //$sql = "INSERT INTO `estatus` (`id`, `estatus`, `comentario`, `fecha_hora`, `id_prealerta`, `id_usuario`) VALUES (NULL, \'0\', NULL, current_timestamp(), \'28\', \'2\')";
            header('location: home.php');
       }
       header('location: ../home.php');
   }
?>