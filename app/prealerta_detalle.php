<?php $id_prealerta = $_GET['id']; ?>
<?php require_once 'php/prealert_details.php';?>
<?php require_once 'php/home.php'?>
<?php $Usuario = $email_sesion ?>
<?php $title = "Inicio - JaguarPack"; ?>
<?php require_once "layout/header.php" ?>

<!-- Contenido -->
<section class="about-section spansistema">
    <div class="container">

        <?php 
        if (isset($_SESSION['comprobante'])) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo $_SESSION['comprobante'] ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php } 
        unset($_SESSION['comprobante']);
        ?>

        <div class="card text-dark bg-light mb-3 ">
            <div class="card-header text-center"> <b><i>Detalle de la Pre-Alerta: </i></b> # <?php echo $idPrealerta ?>
                <br> <b><i>Fecha y Hora: </i></b>(<?php echo $timeStamp ?>)
            </div>
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title"> Dimensiones del Paquete: </h5>
                        <ul>
                            <li> Ancho: <?php echo $ancho ?> lbs. </li>
                            <li> Largo: <?php echo $largo ?> lbs. </li>
                            <li> Alto: <?php echo $alto ?> lbs. </li>
                        </ul>
                        <p class="card-text"> <b> Peso del Producto </b>: <?php echo $peso ?> lb. <b> </b>
                        <p class="card-text"> <b> Valor del Producto </b>: $<?php echo $valor ?> dlls. <b> </b>
                        </p>
                        <p class="card-text"> <b> Contenido del Paquete </b>: <?php echo $contenido ?> </p>
                        <input type="hidden" class="form-control" id="txtIdUsuarioHidden" name="txtIdUsuarioHidden"
                            placeholder="" value="'.$id_usuario.'" required>
                        <p class="card-text"> <b><i>Tracking del Paquete:</i></b> <?php echo $tracking ?> </p>
                        <form action="php/upload.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Comprobante de Pago</label>
                                <input type="file" class="form-control-file" name="exampleFormControlFile1"
                                    id="exampleFormControlFile1">
                                <input type="text" id="prealertaId" name="prealertaId"
                                    value="<?php echo $idPrealerta ?>" hidden>
                            </div>
                            <button type="submit" class="btn btn-success" name="upload">Subir Imágen</button>
                        </form>

                    </div>
                </div>
                <div class="col">
                    <div class="container-fluid h-100">
                        <div class="col-12 text-center">
                            <h4>Comprobante de Pago:</h4>
                            <div class="chocolat-parent">
                                <?php if (mysqli_num_rows($result_comprobantes) > 0): ?>
                                <a href="<?php echo $ruta ?> " class="chocolat-image"
                                    title="Comprobante de Pago Actual">
                                    <div data-crop-image="150">
                                        <img alt="image" src="<?php echo $ruta ?> " width="150px" class="img-fluid">
                                    </div>
                                </a>
                                <?php else: ?>
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <h5 class="display-4"> Falta Adjuntar Comprobante de Pago </h5>
                                    </div>
                                </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="hidden" id="txtIdUsuarioPrealerta" name="txtIdUsuarioPrealerta"
                    value="<?php echo $id_usuario_prealerta ?>">
                <a href="historial_prealerta.php">
                    <button type="button" class="btn btn-outline-dark">Volver</button>
                </a>
            </div>
        </div>
        <div>
<!-- Final del Contenido -->
<?php require_once "layout/footer.php" ?>