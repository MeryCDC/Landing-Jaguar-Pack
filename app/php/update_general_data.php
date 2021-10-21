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


          $conexion->query("update clientes set nombres = '$nombres' , apellidos = '$apellidos', calle = '$calle' , numero_exterior='$numero_ext' , numero_interior='$numero_int' , entre_calles='$entre_calles',
          colonia='$colonia', codigo_postal='$codigo_postal' , estado='$estado' , ciudad='$ciudad' , telefono='$telefono' , referencias='$referencias', telefono_auxiliar='$telefono_aux' where id_usuario='$id_usuario'  ")or die($conexion->error);
          
          #Devuelve el ID del Cliente al que pertenecen los Domicilios
          $resultado_query_cliente = $conexion->query("select id from clientes where id_usuario='$id_usuario' ");
          $obj_query_cliente = $resultado_query_cliente->fetch_object();
          $id_query_cliente = $obj_query_cliente->id;



            #Se capturan los datos que está enviando el usuario sobre el (Domicilio Auxiliar 2)
          $calle2 = $_POST['txtCalle2'];
          $colonia2 = $_POST['txtColonia2'];
          $numero_ext2 = $_POST['txtNumExterior2'];
          $numero_int2 = $_POST['txtNumeroInterior2'];
          $entre_calles2 = $_POST['txtEntreCalles2'];
          $estado2 = $_POST['txtEstado2'];
          $ciudad2 = $_POST['txtCiudad2'];
          $codigo_postal2 = $_POST['txtCodigoPostal2'];
          $referencias2 = $_POST['txtReferencias2'];

          #Se hace la actualización en la base de datos

          $conexion->query("update domicilios set calle = '$calle2' , numero_exterior='$numero_ext2' , numero_interior='$numero_int2' , entre_calles='$entre_calles2',
          colonia='$colonia2', codigo_postal='$codigo_postal2' , estado='$estado2' , ciudad='$ciudad2' , referencias='$referencias2' where id_cliente='$id_query_cliente' and num_domicilio=2  ")or die($conexion->error);


        #Se capturan los datos que está enviando el usuario sobre el (Domicilio Auxiliar 3)
          $calle3 = $_POST['txtCalle3'];
          $colonia3 = $_POST['txtColonia3'];
          $numero_ext3 = $_POST['txtNumExterior3'];
          $numero_int3 = $_POST['txtNumeroInterior3'];
          $entre_calles3 = $_POST['txtEntreCalles3'];
          $estado3 = $_POST['txtEstado3'];
          $ciudad3 = $_POST['txtCiudad3'];
          $codigo_postal3 = $_POST['txtCodigoPostal3'];
          $referencias3 = $_POST['txtReferencias3'];

          #Se hace la actualización en la base de datos
          $conexion->query("update domicilios set calle = '$calle3' , numero_exterior='$numero_ext3' , numero_interior='$numero_int3' , entre_calles='$entre_calles3',
          colonia='$colonia3', codigo_postal='$codigo_postal3' , estado='$estado3' , ciudad='$ciudad3' , referencias='$referencias3' where id_cliente='$id_query_cliente' and num_domicilio=3  ")or die($conexion->error);


         //$conexion->query("update usuarios set confirmar_datos = 1 where email='$email_sesion'");

         header('location: ../home.php');

      }

?>