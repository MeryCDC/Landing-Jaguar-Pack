<?php
  session_start();
  if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    //header("Location: ../index.php");
  }
include "php/conexion.php";
$id_usuario_hidden = $_POST['txtIdUsuarioHidden'];
$email_sesion = $_SESSION['email'];
//Enviar por POST el correo electrónico de la vista "home" y recibirlo en la vista para Editar Datos Cliente
$result = $conexion->query("select id from usuarios where email='$email_sesion'");
$obj = $result->fetch_object();
$id_usuario = $obj->id;

$result_cliente = $conexion->query("select * from clientes where id_usuario='$id_usuario_hidden'");
$obj_cliente = $result_cliente->fetch_object();

$id_cliente = $obj_cliente->id;
$nombre_cliente = $obj_cliente->nombres;
$apellidos_cliente = $obj_cliente->apellidos;
$telefono_cliente = $obj_cliente->telefono;
$telefono_aux_cliente = $obj_cliente->telefono_auxiliar;
$calle_cliente = $obj_cliente->calle;
$colonia_cliente = $obj_cliente->colonia;
$num_ext_cliente = $obj_cliente->numero_exterior;
$num_int_cliente = $obj_cliente->numero_interior;
$entre_calles_cliente = $obj_cliente->entre_calles;
$estado_cliente = $obj_cliente->estado;
$ciudad_cliente = $obj_cliente->ciudad;
$codigo_postal_cliente = $obj_cliente->codigo_postal;
$referencias_cliente = $obj_cliente->referencias;


#Domicilio 2:
$result_cliente2 = $conexion->query("select * from domicilios where id_cliente='$id_cliente' and num_domicilio = 2 ");
$obj_cliente2 = $result_cliente2->fetch_object();

$calle_cliente2 = $obj_cliente2->calle;
$num_ext_cliente2 = $obj_cliente2->numero_exterior;
$num_int_cliente2 = $obj_cliente2->numero_interior;
$entre_calles_cliente2 = $obj_cliente2->entre_calles;
$colonia_cliente2 = $obj_cliente2->colonia;
$codigo_postal_cliente2 = $obj_cliente2->codigo_postal;
$estado_cliente2 = $obj_cliente2->estado;
$ciudad_cliente2 = $obj_cliente2->ciudad;
$referencias_cliente2 = $obj_cliente2->referencias;


#Domicilio 3:
$result_cliente3 = $conexion->query("select * from domicilios where id_cliente='$id_cliente' and num_domicilio = 3 ");
$obj_cliente3 = $result_cliente3->fetch_object();

$calle_cliente3 = $obj_cliente3->calle;
$num_ext_cliente3 = $obj_cliente3->numero_exterior;
$num_int_cliente3 = $obj_cliente3->numero_interior;
$entre_calles_cliente3 = $obj_cliente3->entre_calles;
$colonia_cliente3 = $obj_cliente3->colonia;
$codigo_postal_cliente3 = $obj_cliente3->codigo_postal;
$estado_cliente3 = $obj_cliente3->estado;
$ciudad_cliente3 = $obj_cliente3->ciudad;
$referencias_cliente3 = $obj_cliente3->referencias;

echo '
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Editar datos generales - Jaguarpack</title>
    <meta charset="UTF-8">
    <meta name="description" content="Jaguarpack Compras express">
    <meta name="keywords" content="Compras express, entregas, rapido">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="shortcut icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../css/animate.css" />
    <link rel="stylesheet" href="../css/owl.carousel.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <!-- Header section -->
    <header class="header-section clearfix sticky" id="menu">
        <div class="container-fluid">
            <a href="home.php" class="logosticky" id="logo">
                <img src="../img/logo-blanco.png" alt="" id="logotipo">
            </a>
            <div class="responsive-bar"><i class="fa fa-bars"></i></div>
            <a href="" class="user"><i class="fa fa-user"></i></a>
            <nav class="main-menu">
                <ul class="menu-sistema">
                    <li class="nav-item dropdown">
                        <a class="dark nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            '. $email_sesion .'
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="php/logout.php">Cerrar Sesion</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="about-section spansistema">
    <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card border-success p-3 mb-5 bg-white ">

          <h5 class="card-header">Editar Datos Generales de ('. $email_sesion .')</h5>



          <div class="card-body">
            <form id="form1" action="php/update_general_data.php" method="post" class="needs-validation" novalidate>

              <div class=" text-success">
                <p class="card-text">Los Campos que tienen un (*) son obligatorios</p>
              </div>
              <br>

              <div class="form-row">

                <div class="col-md-6 mb-3">
                  <label for="nombre">Nombre(s) *</label>
                  <input type="text" class="form-control" id="txtNombres" name="txtNombres"
                    placeholder="Ej. Víctor Manuel" value="'.$nombre_cliente.'" required>

                  <div class="valid-feedback">¡Ok válido!</div>
                  <div class="invalid-feedback">No deje el campo "Nombre(s)" vacío.</div>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="apellido">Apellido(s) *</label>
                  <input type="text" class="form-control" id="txtApellidos" name="txtApellidos"
                    placeholder="Ej. Castillo González" value="'. $apellidos_cliente .'" required>

                  <div class="valid-feedback">¡Ok válido!</div>
                  <div class="invalid-feedback">No deje el campo "Apellido(s)" vacío.</div>
                </div>

              </div>


              <div class="form-row">

                <div class="col-md-6 mb-3">
                  <label for="nombre">Teléfono *</label>
                  <input type="text" class="form-control" id="txtTelefono" name="txtTelefono"
                    placeholder="+52 (867) 306 7845" value="'. $telefono_cliente .'" required>

                  <div class="valid-feedback">¡Ok válido!</div>
                  <div class="invalid-feedback">No deje el campo "Teléfono" vacío.</div>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="apellido">Teléfono Secundario</label>
                  <input type="text" class="form-control" id="txtTelefonoAuxiliar" name="txtTelefonoAuxiliar"
                    placeholder="+52 (867) 124 8752" value="'. $telefono_aux_cliente .'">

                  <div class="valid-feedback">¡Ok válido!</div>
                  <div class="invalid-feedback">No deje el campo "Teléfono Secundario" vacío.</div>
                </div>

              </div>


              <div class="form-row">

                <div class="col-md-3 mb-3">
                  <label for="nombre">Calle *</label>
                  <input type="text" class="form-control" id="txtCalle" name="txtCalle" placeholder="Mariano Matamoros" value="'. $calle_cliente .'"
                    required>

                  <div class="valid-feedback">¡Ok válido!</div>
                  <div class="invalid-feedback">No deje el campo "Calle" vacío.</div>
                </div>

                <div class="col-md-3 mb-3">
                  <label for="apellido">Colonia *</label>
                  <input type="text" class="form-control" id="txtColonia" name="txtColonia" placeholder="Sector Centro"
                    value="'. $colonia_cliente .'" required>

                  <div class="valid-feedback">¡Ok válido!</div>
                  <div class="invalid-feedback">No deje el campo "Colonia" vacío.</div>
                </div>


                <div class="col-md-3 mb-3">
                  <label for="nombre">Número Exterior *</label>
                  <input type="text" class="form-control" id="txtNumExterior" name="txtNumExterior" placeholder="1234"
                    value="'. $num_ext_cliente .'" required>

                  <div class="valid-feedback">¡Ok válido!</div>
                  <div class="invalid-feedback">No deje el campo "Número Exterior" vacío.</div>
                </div>

                <div class="col-md-3 mb-3">
                  <label for="apellido"> Número Interior </label>
                  <input type="text" class="form-control" id="txtNumeroInterior" name="txtNumeroInterior"
                    placeholder="7557" value="'. $num_int_cliente .'">

                </div>
              </div>


              <div class="form-row">

                <div class="col-md-12 mb-3">
                  <label for="nombre">Entre Calles *</label>
                  <input type="text" class="form-control" id="txtEntreCalles" name="txtEntreCalles"
                    placeholder="Entre calle Hidalgo y Belen" value="'. $entre_calles_cliente .'" required>

                  <div class="valid-feedback">¡Ok válido!</div>
                  <div class="invalid-feedback">No deje el campo "Nombre(s)" vacío.</div>
                </div>

              </div>


              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="txtEstado"> Estado *</label>
                  <select name="txtEstado" id="txtEstado" class="form-control">
                    <option value="'. $estado_cliente .'" selected> '. $estado_cliente .' </option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Baja California Sur">Baja California Sur</option>
                    <option value="Campeche">Campeche</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="CDMX">Ciudad de México</option>
                    <option value="Coahuila">Coahuila</option>
                    <option value="Colima">Colima</option>
                    <option value="Durango">Durango</option>
                    <option value="Estado de México">Estado de México</option>
                    <option value="Guanajuato">Guanajuato</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Hidalgo">Hidalgo</option>
                    <option value="Jalisco">Jalisco</option>
                    <option value="Michoacán">Michoacán</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Nayarit">Nayarit</option>
                    <option value="Nuevo León">Nuevo León</option>
                    <option value="Oaxaca">Oaxaca</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Querétaro">Querétaro</option>
                    <option value="Quintana Roo">Quintana Roo</option>
                    <option value="San Luis Potosí">San Luis Potosí</option>
                    <option value="Sinaloa">Sinaloa</option>
                    <option value="Sonora">Sonora</option>
                    <option value="Tabasco">Tabasco</option>
                    <option value="Tamaulipas">Tamaulipas</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                    <option value="Veracruz">Veracruz</option>
                    <option value="Yucatán">Yucatán</option>
                    <option value="Zacatecas">Zacatecas</option>
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="apellido">Ciudad *</label>
                  <input type="text" class="form-control" id="txtCiudad" name="txtCiudad" placeholder="Nuevo Laredo"
                    value="'. $ciudad_cliente .'" required>

                  <div class="valid-feedback">¡Ok válido!</div>
                  <div class="invalid-feedback">No deje el campo "Ciudad" vacío.</div>
                </div>


                <div class="col-md-2 mb-3">
                  <label for="apellido">Código Postal *</label>
                  <input type="text" class="form-control" id="txtCodigoPostal" name="txtCodigoPostal"
                    placeholder="88000" value="'. $codigo_postal_cliente .'" required>

                  <div class="valid-feedback">¡Ok válido!</div>
                  <div class="invalid-feedback">No deje el campo "Código Postal" vacío.</div>
                </div>

              </div>


              <div class="form-group">
                <label for="exampleFormControlTextarea1">Referencias</label>
                <textarea class="form-control" id="txtReferencias" name="txtReferencias" rows="2"
                  placeholder="Casa verde de dos pisos."
                  required>'. $referencias_cliente .'</textarea>

                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">No deje el campo "Referencias" vacío.</div>
              </div>


              <hr id="linea" style="display:none;">


              <!-- ################         DOMICILIO 2         ################ -->

              <div class=" text-success">
                <p class="card-text" id="lblDomicilioAux1" style="display:none;"> Datos de Domicilio Auxiliar (1)</p>
              </div>

              <div class="form-row" id="div1" style="display:none;">

              <div class="col-md-3 mb-3">
                <label for="txtCalle2" style="display:none;" id="lblCalle2" name="lblCalle2" >Calle *</label>
                <input type="hidden" class="form-control" id="txtCalle2" name="txtCalle2" placeholder="Mariano Matamoros" value="'. $calle_cliente2 .'">

                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">No deje el campo "Calle" vacío.</div>
              </div>

              <div class="col-md-3 mb-3">
                <label for="txtColonia2" style="display:none;" id="lblColonia2" name="lblColonia2" >Colonia *</label>
                <input type="hidden" class="form-control" id="txtColonia2" name="txtColonia2" placeholder="Centro" value="'. $colonia_cliente2 .'">

                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">No deje el campo "Colonia" vacío.</div>
              </div>


              <div class="col-md-3 mb-3">
                <label for="txtNumExterior2" style="display:none;" id="lblNumExterior2" name="lblNumExterior2" >Número Exterior *</label>
                <input type="hidden" class="form-control" id="txtNumExterior2" name="txtNumExterior2" placeholder="1234" value="'. $num_ext_cliente2 .'">

                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">No deje el campo "Número Exterior" vacío.</div>
              </div>

              <div class="col-md-3 mb-3">
                <label for="txtNumeroInterior2" style="display:none;" id="lblNumeroInterior2" name="lblNumeroInterior2" > Número Interior </label>
                <input type="hidden" class="form-control" id="txtNumeroInterior2" name="txtNumeroInterior2" value="' . $num_int_cliente2 . '">

              </div>
            </div>


            <div class="form-row" id="div2" style="display:none;">

            <div class="col-md-12 mb-3">
              <label for="txtEntreCalles2" style="display:none;" id="lblEntreCalles2" name="lblEntreCalles2" >Entre Calles *</label>
              <input type="hidden" class="form-control" id="txtEntreCalles2" name="txtEntreCalles2" placeholder="Entre calle Hidalgo y Belen" value="' . $entre_calles_cliente2 . '">

              <div class="valid-feedback">¡Ok válido!</div>
              <div class="invalid-feedback">No deje el campo "Nombre(s)" vacío.</div>
            </div>

          </div>


          <div class="form-row" id="div3" style="display:none;">

            <div class="form-group col-md-4">
              <label for="txtEstado2" style="display:none;" id="lblEstado2" name="lblEstado2" > Estado *</label>
              <select style="display:none;" name="txtEstado2" id="txtEstado2" class="form-control">
                <option value="'. $estado_cliente2 .'" selected> '. $estado_cliente2 .' </option>
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Baja California">Baja California</option>
                <option value="Baja California Sur">Baja California Sur</option>
                <option value="Campeche">Campeche</option>
                <option value="Chiapas">Chiapas</option>
                <option value="Chihuahua">Chihuahua</option>
                <option value="CDMX">Ciudad de México</option>
                <option value="Coahuila">Coahuila</option>
                <option value="Colima">Colima</option>
                <option value="Durango">Durango</option>
                <option value="Estado de México">Estado de México</option>
                <option value="Guanajuato">Guanajuato</option>
                <option value="Guerrero">Guerrero</option>
                <option value="Hidalgo">Hidalgo</option>
                <option value="Jalisco">Jalisco</option>
                <option value="Michoacán">Michoacán</option>
                <option value="Morelos">Morelos</option>
                <option value="Nayarit">Nayarit</option>
                <option value="Nuevo León">Nuevo León</option>
                <option value="Oaxaca">Oaxaca</option>
                <option value="Puebla">Puebla</option>
                <option value="Querétaro">Querétaro</option>
                <option value="Quintana Roo">Quintana Roo</option>
                <option value="San Luis Potosí">San Luis Potosí</option>
                <option value="Sinaloa">Sinaloa</option>
                <option value="Sonora">Sonora</option>
                <option value="Tabasco">Tabasco</option>
                <option value="Tamaulipas">Tamaulipas</option>
                <option value="Tlaxcala">Tlaxcala</option>
                <option value="Veracruz">Veracruz</option>
                <option value="Yucatán">Yucatán</option>
                <option value="Zacatecas">Zacatecas</option>

              </select>
            </div>


            <div class="col-md-6 mb-3">
              <label for="txtCiudad2" style="display:none;" id="lblCiudad2" name="lblCiudad2" >Ciudad *</label>
              <input type="hidden" class="form-control" id="txtCiudad2" name="txtCiudad2" placeholder="Nuevo Laredo"
                value="' . $ciudad_cliente2 . '">

              <div class="valid-feedback">¡Ok válido!</div>
              <div class="invalid-feedback">No deje el campo "Ciudad" vacío.</div>
            </div>


            <div class="col-md-2 mb-3">
              <label for="txtCodigoPostal2" style="display:none;" id="lblCodigoPostal2" name="lblCodigoPostal2" >Código Postal *</label>
              <input type="hidden" class="form-control" id="txtCodigoPostal2" name="txtCodigoPostal2"
                placeholder="88000" value="' . $codigo_postal_cliente2 . '">

              <div class="valid-feedback">¡Ok válido!</div>
              <div class="invalid-feedback">No deje el campo "Código Postal" vacío.</div>
            </div>

          </div>


          <div class="form-group">
            <label for="txtReferencias2" style="display:none;" id="lblReferencias2" name="lblReferencias2" >Referencias</label>
            <textarea class="form-control" style="display:none;" id="txtReferencias2" name="txtReferencias2"  rows="2"
              placeholder="Casa verde de dos pisos.">'.$referencias_cliente2.'</textarea>

            <div class="valid-feedback">¡Ok válido!</div>
            <div class="invalid-feedback">No deje el campo "Referencias" vacío.</div>
          </div>



          <hr id="linea2" style="display:none;">


          <!-- ################         DOMICILIO 3         ################ -->

          <div class=" text-success">
            <p class="card-text" id="lblDomicilioAux2" style="display:none;"> Datos de Domicilio Auxiliar (2)</p>
          </div>
          <div class="form-row" id="div10" style="display:none;">

          <div class="col-md-3 mb-3">
            <label for="txtCalle3" style="display:none;" id="lblCalle3" name="lblCalle3" >Calle *</label>
            <input type="hidden" class="form-control" id="txtCalle3" name="txtCalle3" placeholder="Mariano Matamoros" value="'. $calle_cliente3 .'">

            <div class="valid-feedback">¡Ok válido!</div>
            <div class="invalid-feedback">No deje el campo "Calle" vacío.</div>
          </div>

          <div class="col-md-3 mb-3">
            <label for="txtColonia3" style="display:none;" id="lblColonia3" name="lblColonia3" >Colonia *</label>
            <input type="hidden" class="form-control" id="txtColonia3" name="txtColonia3" placeholder="Centro" value="' .$colonia_cliente3 . '">

            <div class="valid-feedback">¡Ok válido!</div>
            <div class="invalid-feedback">No deje el campo "Colonia" vacío.</div>
          </div>


          <div class="col-md-3 mb-3">
            <label for="txtNumExterior3" style="display:none;" id="lblNumExterior3" name="lblNumExterior3" >Número Exterior *</label>
            <input type="hidden" class="form-control" id="txtNumExterior3" name="txtNumExterior3" placeholder="1234" value="'. $num_ext_cliente3 .'">

            <div class="valid-feedback">¡Ok válido!</div>
            <div class="invalid-feedback">No deje el campo "Número Exterior" vacío.</div>
          </div>

          <div class="col-md-3 mb-3">
            <label for="txtNumeroInterior3" style="display:none;" id="lblNumeroInterior3" name="lblNumeroInterior3" > Número Interior </label>
            <input type="hidden" class="form-control" id="txtNumeroInterior3" name="txtNumeroInterior3" value="'.$num_int_cliente3.'">

          </div>
        </div>


        <div class="form-row" id="div11" style="display:none;">

        <div class="col-md-12 mb-3">
          <label for="txtEntreCalles3" style="display:none;" id="lblEntreCalles3" name="lblEntreCalles3" >Entre Calles *</label>
          <input type="hidden" class="form-control" id="txtEntreCalles3" name="txtEntreCalles3" placeholder="Entre calle Hidalgo y Belen" value="'.$entre_calles_cliente3.'">

          <div class="valid-feedback">¡Ok válido!</div>
          <div class="invalid-feedback">No deje el campo "Nombre(s)" vacío.</div>
        </div>

      </div>


      <div class="form-row" id="div12" style="display:none;">

        <div class="form-group col-md-4">
          <label for="txtEstado3" style="display:none;" id="lblEstado3" name="lblEstado3" > Estado *</label>
          <select style="display:none;" name="txtEstado3" id="txtEstado3" class="form-control">
            <option value="'. $estado_cliente3 .'" selected> '. $estado_cliente3 .' </option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="CDMX">Ciudad de México</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Durango">Durango</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Querétaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosí">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>

          </select>
        </div>


        <div class="col-md-6 mb-3">
          <label for="txtCiudad3" style="display:none;" id="lblCiudad3" name="lblCiudad3" >Ciudad *</label>
          <input type="hidden" class="form-control" id="txtCiudad3" name="txtCiudad3" placeholder="Nuevo Laredo"
            value="'.$ciudad_cliente3.'">

          <div class="valid-feedback">¡Ok válido!</div>
          <div class="invalid-feedback">No deje el campo "Ciudad" vacío.</div>
        </div>


        <div class="col-md-2 mb-3">
          <label for="txtCodigoPostal3" style="display:none;" id="lblCodigoPostal3" name="lblCodigoPostal3" >Código Postal *</label>
          <input type="hidden" class="form-control" id="txtCodigoPostal3" name="txtCodigoPostal3"
            placeholder="88000" value="'.$codigo_postal_cliente3.'">

          <div class="valid-feedback">¡Ok válido!</div>
          <div class="invalid-feedback">No deje el campo "Código Postal" vacío.</div>
        </div>

      </div>


      <div class="form-group">
        <label for="txtReferencias3" style="display:none;" id="lblReferencias3" name="lblReferencias3" >Referencias</label>
        <textarea class="form-control" style="display:none;" id="txtReferencias3" name="txtReferencias3"  rows="2"
          placeholder="Casa verde de dos pisos con porton gris."
          >'.$referencias_cliente3.'</textarea>

        <div class="valid-feedback">¡Ok válido!</div>
        <div class="invalid-feedback">No deje el campo "Referencias" vacío.</div>
      </div>
              <a href="javascript: history.go(-1)">
                <button type="button" class="btn btn-outline-dark">Volver</button>
              </a>
              

              <button type="button" class="btn btn-outline-success" id="btnAgregarDomicilio" value="0" onclick="myFunction()">Agregar Más Domicilio(s)</button>


              <button type="submit" class="btn btn-success">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    </section>

  <script src="assets/jquery/jquery-3.3.1.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap4/js/bootstrap.min.js"></script>
  <script src="assets/codigo.js"></script>
  <script>
    	$(".responsive-bar").on("click", function(event) {
		$(".main-menu").slideToggle(400);
		event.preventDefault();
	});
</script>
</body>

</html>




';


?>

