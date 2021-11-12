<?php
  session_start();
  if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    //header("Location: ../index.php");
  }
  
  $id_usuario_prealerta = $_POST['txtIdUsuarioHidden'];
  echo $id_usuario_prealerta;
?>

<?php $Usuario = $_SESSION['email'] ?>
<?php $title = "Creación de Pre-Alerta - jaguarPack"; ?>

<?php require_once "layout/header.php" ?>
 <link href="../img/favicon.ico" rel="shortcut icon" />    
<section class="about-section spansistema">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-success p-3 mb-5 bg-white ">
                    <h5 class="card-header"> Creación de Pre-Alerta </h5>
                    <div class="card-body">
                        <form id="form1" action="php/pre_alert.php" method="post" class="needs-validation" novalidate>
                            <div class=" text-success">
                                <p class="card-text">Los Campos que tienen un (*) son obligatorios</p>
                            </div>
                            <br>
                            
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="txtPeso"> Peso en <b>Libras</b> (lb) *</label>
                                    <input type="text" class="form-control" id="txtPeso" name="txtPeso"
                                        placeholder="0 lb" value="" pattern="[0-9.]{1,6}"
                                        title="Solo puede ingresar números" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Peso(s)" vacío.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="txtvalor">Valor en <b>Dólares</b> del Producto (dlls) *</label>
                                    <input type="text" class="form-control" id="txtvalor" name="txtvalor"
                                        placeholder="0 dlls" value="" oninput="calcularPorcentajeSeguro()"
                                        pattern="[0-9.]{1,7}" title="Solo puede ingresar números" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Valor del Producto" vacío.</div>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="txtAlto">Alto en Pulgadas (in)</label>
                                    <input type="text" class="form-control" id="txtAlto" name="txtAlto"
                                        placeholder="0" value="" pattern="[0-9.]{1,6}"
                                        title="Solo puede ingresar números">
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Alto" vacío.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="txtAncho">Ancho en Pulgadas (in)</label>
                                    <input type="text" class="form-control" id="txtAncho" name="txtAncho"
                                        placeholder="0" value="" pattern="[0-9.]{1,6}"
                                        title="Solo puede ingresar números">
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Ancho" vacío.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="txtLargo">Largo en Pulgadas (in)</label>
                                    <input type="text" class="form-control" id="txtLargo" name="txtLargo"
                                        placeholder="0" value="" pattern="[0-9.]{1,6}"
                                        title="Solo puede ingresar números">
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Largo" vacío.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="txtContenido">Contenido *</label>
                                    <input type="text" class="form-control" id="txtContenido" name="txtContenido"
                                        placeholder="Laptop DELL, Play Station 5, iPhone 12 Pro Max, Surface, etc"
                                        value="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Contenido" vacío.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="txtOrigen">Origen de Página Web </label>
                                    <input type="text" class="form-control" id="txtOrigen" name="txtOrigen"
                                        placeholder="Amazon, eBay, Target, etc" value="">
                                    <div class="valid-feedback">¡Ok válido!</div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="txtOrigen">Tracking </label>
                                    <a href="#" class="fa fa-question-circle"
                                    data-original-title="Si usted ya cuenta con el (Tracking / Guía / Núm. de Seguimiento que le proporciona su paquetería, favor de ingresarlo." 
                                    data-placement="left" data-toggle="tooltip"></a>
                                    <input type="text" class="form-control" id="txtTracking" name="txtTracking"
                                        placeholder="Ingrese el tracking" value="">
                                    <div class="valid-feedback">¡Ok válido!</div>
                                </div>
                            </div>
                            <!--// cool stuff here -->
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-check">
                                        <br>
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                            name="exampleCheck1" onchange="calcularPorcentajeSeguro()">
                                        <label class="form-check-label" for="exampleCheck1">¿Desea incluir
                                            Seguro?</label>
                                        <div class="valid-feedback">¡Ok válido!</div>
                                        <div class="invalid-feedback">No deje el campo "Nombre(s)" vacío.</div>
                                    </div>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label for="txtPorcentajeSeguro" id="porcentajeLabel" style="display:none;">5% del
                                        Valor del Producto </label>
                                    <input type="text" class="form-control" id="txtPorcentajeSeguro"
                                        name="txtPorcentajeSeguro"
                                        placeholder="El mínimo valor para asegurar tu producto es de 100 dlls" value=""
                                        style="display:none;" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No se puedes asegurar su producto si no tiene un valor
                                        mínimo de 100 dlls.</div>
                                    <p class="text-danger" style="display:none;" id="labelSeguro">El mínimo valor para
                                        asegurar es de 100 DLLS.</p>
                                    <h6 id="labelCotizacion" style="display:none;"> <b> </b></h6>
                                </div>
                            </div>
                            <input type="hidden" id="txtIdUsuarioPrealerta" name="txtIdUsuarioPrealerta"
                                value="<?php echo $id_usuario_prealerta ?>">
                            <a href="home.php">
                                <button type="button" class="btn btn-outline-dark">Cancelar Pre-Alerta</button>
                            </a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "layout/footer.php" ?>

