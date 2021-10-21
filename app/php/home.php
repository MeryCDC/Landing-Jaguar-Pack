<?php
    require_once("conexion.php");
        //Se crea sesión para posteriormente hacer búsquedas en BD
        session_start();
        $email_sesion = $_SESSION['email'];
        
        if (!isset($_SESSION['email'])) {
            header("Location: login.php");
        }

        $result = $conexion->query(" select * from usuarios where email='$email_sesion' ");
        $obj = $result->fetch_object();
        $confirmar_datos_usuario = $obj->confirmar_datos;
        $id_usuario = $obj->id;
 
        //Información General de Cliente
        $resultado = $conexion->query(" select * from clientes where id_usuario='$id_usuario' ");
        $obj_cliente = $resultado->fetch_object();

        if( mysqli_num_rows($resultado) > 0 ){
            $nombres_obj_cliente = $obj_cliente->nombres;
            $apellidos_obj_cliente = $obj_cliente->apellidos;
            $nombre_completo = $nombres_obj_cliente . " " . $apellidos_obj_cliente;
    
            $calle_obj_cliente = $obj_cliente->calle;
            $numero_ext_obj_cliente = $obj_cliente->numero_exterior;
            $numero_int_obj_cliente = $obj_cliente->numero_interior;
            $entre_calles_obj_cliente = $obj_cliente->entre_calles;
            $colonia_obj_cliente = $obj_cliente->colonia;
            $codigo_postal_obj_cliente = $obj_cliente->codigo_postal;
            $estado_obj_cliente = $obj_cliente->estado;
            $ciudad_obj_cliente = $obj_cliente->ciudad;
            $referencias_obj_cliente = $obj_cliente->referencias;
            $numero_telefono_obj_cliente = $obj_cliente->telefono;
            $numero_aux_obj_cliente = $obj_cliente->telefono_auxiliar;
        }
?>