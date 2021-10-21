<?php require_once 'php/home.php'?>
<?php $Usuario = $email_sesion ?>
<?php $title = "Datos - JaguarPack"; ?>
<?php require_once "layout/header.php" ?>

<!-- Contenido -->
<section class="about-section spansistema">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-success p-3 mb-5 bg-white ">
                    <h5 class="card-header">Datos Generales</h5>
                    <div class="card-body">
                        <form id="form1" action="php/general_data.php" method="post" class="needs-validation"
                            novalidate>
                            <div class=" text-success">
                                <p class="card-text">Los Campos que tienen un (*) son obligatorios</p>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre">Nombre(s) *</label>
                                    <input type="text" class="form-control" id="txtNombres" name="txtNombres"
                                        placeholder="Ej. Javier Manuel" value="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Nombre(s)" vacío.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="apellido">Apellido(s) *</label>
                                    <input type="text" class="form-control" id="txtApellidos" name="txtApellidos"
                                        placeholder="Ej. Hernández González" value="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Apellido(s)" vacío.</div>
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="col-md-6 mb-3">
                                    <label for="nombre">Teléfono *</label>
                                    <input type="tel" class="form-control" id="txtTelefono" name="txtTelefono"
                                        pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="8673067845"
                                        oninput="agregarCaracter(this.value)" value="" required>

                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Teléfono" vacío.</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="apellido">Teléfono Secundario</label>
                                    <input type="text" class="form-control" id="txtTelefonoAuxiliar"
                                        name="txtTelefonoAuxiliar" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                                        placeholder="8673067845" value="">
                                </div>
                            </div>


                            <div class="form-row">

                                <div class="col-md-6 mb-3">
                                    <label for="nombre">Calle *</label>
                                    <input type="text" class="form-control" id="txtCalle" name="txtCalle"
                                        placeholder="Guerrero" value="" required>

                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Calle" vacío.</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="apellido">Colonia *</label>
                                    <input type="text" class="form-control" id="txtColonia" name="txtColonia"
                                        placeholder="Centro" value="" required>

                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Colonia" vacío.</div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre">Número Exterior *</label>
                                    <input type="text" class="form-control" id="txtNumExterior" name="txtNumExterior"
                                        pattern="[A-Za-z0-9 ]{1,25}" placeholder="1107" value="" required>

                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Número Exterior" vacío.</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="apellido"> Número Interior </label>
                                    <input type="text" class="form-control" id="txtNumeroInterior"
                                        name="txtNumeroInterior" pattern="[A-Za-z0-9 ]{1,25}" placeholder="7557"
                                        value="">

                                </div>
                            </div>


                            <div class="form-row">

                                <div class="col-md-12 mb-3">
                                    <label for="nombre">Entre Calles *</label>
                                    <input type="text" class="form-control" id="txtEntreCalles" name="txtEntreCalles"
                                        placeholder="Entre Lincoln y Venezuela" value="" required>

                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Nombre(s)" vacío.</div>
                                </div>

                            </div>


                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label for="txtEstado"> Estado *</label>
                                    <select name="txtEstado" id="txtEstado" class="form-control" required>
                                        <option value="">Selecciona el Estado</option>
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

                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Estado" vacío.</div>
                                </div>


                                <div class="col-md-6 mb-3">
                                    <label for="apellido">Ciudad *</label>
                                    <input type="text" class="form-control" id="txtCiudad" name="txtCiudad"
                                        placeholder="Nuevo Laredo" value="" required>

                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Ciudad" vacío.</div>
                                </div>


                                <div class="col-md-2 mb-3">
                                    <label for="apellido">Código Postal *</label>
                                    <input type="text" class="form-control" id="txtCodigoPostal" name="txtCodigoPostal"
                                        pattern="[0-9]{3,10}" placeholder="88000" value="" required>

                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">No deje el campo "Código Postal" vacío.</div>
                                </div>

                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Referencias *</label>
                                <textarea class="form-control" id="txtReferencias" name="txtReferencias" rows="2"
                                    placeholder="Plaza Hidalgo a 2 cuadras." required></textarea>

                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">No deje el campo "Referencias" vacío.</div>
                            </div>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Final del Contenido --> 
<?php require_once "layout/footer.php" ?>