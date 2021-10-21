<?php

    include "./conexion.php";

    if(isset($_POST['txtNombres']) && isset($_POST['txtApellidos']) && isset($_POST['txtTelefono']) &&
       isset($_POST['txtTelefonoAuxiliar']) && isset($_POST['txtCalle']) && isset($_POST['txtColonia']) && isset($_POST['txtNumExterior']) && 
       isset($_POST['txtNumeroInterior']) && isset($_POST['txtEntreCalles']) && isset($_POST['txtEstado']) && 
       isset($_POST['txtCiudad']) && isset($_POST['txtCodigoPostal']) && isset($_POST['txtReferencias'])
      )

      {
          $nombres = $_POST['txtNombres'];
          $apellidos = $_POST['txtApellidos'];
          $telefono = $_POST['txtTelefono'];
          $telefono_aux = $_POST['txtTelefonoAuxiliar'];
          $calle = $_POST['txtCalle'];
          $colonia = $_POST['txtColonia'];
          $numero_ext = $_POST['txtNumExterior'];
          $numero_int = $_POST['txtNumeroInterior'];
          $entre_calles = $_POST['txtEntreCalles'];
          $estado = $_POST['txtEstado'];
          $ciudad = $_POST['txtCiudad'];
          $codigo_postal = $_POST['txtCodigoPostal'];
          $referencias = $_POST['txtReferencias'];

          session_start();
          $email_sesion = $_SESSION['email'];
          //echo $email_sesion;

          $result = $conexion->query("select id from usuarios where email='$email_sesion'");
          $obj = $result->fetch_object();
          $id_usuario = $obj->id;


          $conexion->query("insert into clientes (nombres, apellidos , calle , numero_exterior , numero_interior , entre_calles,
          colonia, codigo_postal , estado , ciudad , telefono , referencias, telefono_auxiliar, id_usuario) 
            
          values('$nombres','$apellidos','$calle','$numero_ext','$numero_int','$entre_calles','$colonia','$codigo_postal','$estado','$ciudad', '$telefono', '$referencias', '$telefono_aux','$id_usuario')  ")or die($conexion->error);


         $conexion->query("update usuarios set confirmar_datos = 1 where email='$email_sesion'");


         ######## SE AGREGAN 2 DOMICILIOS AUXILIARES CON DATOS EN BLANCO, PARA QUE POSTERIORMENTE EL USUARIO LOS EDITE ########

         $resultado_cliente_domicilios = $conexion->query("select id from clientes where id_usuario ='$id_usuario'");
         $obj_cliente = $resultado_cliente_domicilios->fetch_object();
         $id_cliente = $obj_cliente->id;    
         //echo $id_cliente;

         $conexion->query("insert into domicilios (num_domicilio, calle, numero_exterior, numero_interior, entre_calles,
         colonia, codigo_postal, estado, ciudad, referencias, id_cliente) 
           
         values(2, '', '', '', '', '','', '', '', '', '$id_cliente'), (3, '', '', '', '', '','', '', '', '', '$id_cliente') ")or die($conexion->error);

         header('location: ../home.php');

      }

?>