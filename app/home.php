<?php require_once 'php/home.php'?>
<?php $Usuario = $email_sesion ?>
<?php $title = "Inicio - JaguarPack"; ?>
<?php require_once "layout/header.php" ?>

<!-- Contenido -->
<section class="about-section spansistema">
<div class="container">
    <?php if($confirmar_datos_usuario > 0): ?>
    <div class="small-container3 center-block">
        <div class="card text-dark bg-light mb-3 ">
            <div class="card-header text-center">
                <b><i>Datos del Generales de: </i></b> <?php echo $nombre_completo ?> <br>
                <a href="#" class="fa fa-question-circle"
                                    data-original-title="Este es el número de identificación de tu casillero virtual." 
                                    data-placement="left" data-toggle="tooltip"></a>
                <b><i>Núm. Casillero:</i></b> JP<?php echo $id_usuario ?>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Datos del usuario logeado -->
                    <div class="card-body">
                        <form action="editar_datos_generales.php" method="post">
                            <h5 class="card-title"> Nombre Completo: <?php echo $nombre_completo ?>. </h5>
                            <p class="card-text">
                                <b> Calle </b>: <?php echo $calle_obj_cliente ?> |
                                <b> Núm. Exterior </b>: <?php echo $numero_ext_obj_cliente ?> |
                                <b> Núm. Interior </b>: <?php echo $numero_int_obj_cliente ?>
                            </p>
                            <p class="card-text">
                                <b> Entre Calles </b>: <?php echo $entre_calles_obj_cliente ?>
                            </p>
                            <p class="card-text">
                                <b> Colonia </b>: <?php echo $colonia_obj_cliente ?> |
                                <b> Código Postal </b>: <?php echo $codigo_postal_obj_cliente ?>
                            </p>
                            <p class="card-text">
                                <b> Estado </b>: <?php echo $estado_obj_cliente ?> |
                                <b> Ciudad </b>: <?php echo $ciudad_obj_cliente  ?>
                            </p>
                            <p class="card-text">
                                <b>Teléfono </b>: <?php echo $numero_telefono_obj_cliente ?> |
                                <b>Teléfono Aux </b>: <?php echo $numero_aux_obj_cliente  ?>
                            </p>
                            <p class="card-text">
                                <b> Referencia(s) </b>: <?php echo $referencias_obj_cliente  ?>
                            </p>

                            <input type="hidden" class="form-control" id="txtIdUsuarioHidden" name="txtIdUsuarioHidden"
                                placeholder="" value="<?php echo $id_usuario ?>" required>
                            <br> <br>
                            <p class="card-text"> <a href="#" class="fa fa-question-circle"
                                    data-original-title="Esta es la dirección de envío que usted debe de ingresar al realizar su compra." 
                                    data-placement="left" data-toggle="tooltip"></a> <b><i>Dirección de tu Casillero Virtual:</i></b> 1119
                                Santa Isabel Ave, Laredo, TX 78040, EE. UU. </p>
                            <button type="submit" class="btn btn-success">Editar Información
                                General</button>
                        </form>
                    </div>
                </div>
                <!-- Opciones de pre alerta -->
                <div class="col">
                    <br> <br><br>
                    <div class="container-fluid h-100">
                        <!-- Boton para Pre-Alerta tu Pedido -->
                        <div class="col-12 text-center">
                            <form action="pre_alerta.php" method="post">
                                <input type="hidden" class="form-control" id="txtIdUsuarioHidden"
                                    name="txtIdUsuarioHidden" placeholder="" value="<?php echo $id_usuario ?>" required>
                                <button type="submit" class="btn btn-dark btn-lg">Pre-Alerta <br> tu
                                    Pedido</button>
                            </form>
                        </div><br>
                        <!-- Boton para ver el historial de pedidos -->
                        <div class="col-12 text-center">
                            <form action="historial_prealerta.php" method="post">
                                <input type="hidden" class="form-control" id="txtIdUsuarioHidden"
                                    name="txtIdUsuarioHidden" placeholder="" value="<?php echo $id_usuario ?>" required>
                                <button type="submit" class="btn btn-info btn-lg">Historial <br>de
                                    Pedidos</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
        <div class="small-container3 center-block">
            <div class="card text-dark bg-light mb-3">
                <div class="card-header">Datos Generales de <?php echo $email_sesion ?></div>
                <div class="card-body">
                    <h5 class="card-title">Llena tus Datos Generales!</h5>
                    <p class="card-text">Para poder hacer tus pre-alertas debes llenar primero tus datos generales.
                        Haz clic en el siguiente botón para llenarlos.</p>
                    <a href="datos_generales.php"><button type="submit" class="btn btn-success">Llena tus Datos
                            Generales</button></a>
                </div>
            </div>
        </div>
    <?php endif ?>
</div>
</section>
<!-- Final del Contenido -->
<?php require_once "layout/footer.php" ?>