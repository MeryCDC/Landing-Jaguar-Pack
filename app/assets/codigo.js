// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict';
  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


function calcularPorcentajeSeguro() {
  //alert("Hola");

  var txtValor = document.getElementById("txtvalor").value;
  var txtPorcentajeSeguro = document.getElementById("txtPorcentajeSeguro");
  var chkSeguro = document.getElementById('exampleCheck1').checked;

  var valorMXN = txtValor * 20;
  var porcentajeSeguro = 5;
  var resultadoPorcentajeSeguro = (valorMXN * porcentajeSeguro) / 100;

  if (chkSeguro) {
    //Si está seleccionado el "Seguro"

    if (txtValor != "") {
      //Si tiene asignado un (Valor)
      document.getElementById("labelCotizacion").innerHTML = "El costo del seguro será de : " + resultadoPorcentajeSeguro.toFixed(2) + "MXN";
      document.getElementById("labelCotizacion").style.display = "block";
      
      txtPorcentajeSeguro.value = resultadoPorcentajeSeguro.toFixed(3);
      document.getElementById("txtPorcentajeSeguro").readOnly = true;
      document.getElementById("porcentajeLabel").style.display = "block";
      document.getElementById("txtPorcentajeSeguro").style.display = "block";
    }else {
      //Si no tiene un valor asignado
      document.getElementById("labelCotizacion").style.display = "none";
    }
  }
  else {
    //Si NO está seleccionado el "Seguro"
    if (txtValor != "") {

      document.getElementById("labelCotizacion").innerHTML = "El costo del seguro será de : " + resultadoPorcentajeSeguro.toFixed(2) + "MXN";
      document.getElementById("labelCotizacion").style.display = "block";

      document.getElementById("txtPorcentajeSeguro").readOnly = false;
      txtPorcentajeSeguro.value = 0;
      document.getElementById("porcentajeLabel").style.display = "none";
      document.getElementById("txtPorcentajeSeguro").style.display = "none";

    }
    else {
      document.getElementById("labelCotizacion").style.display = "none";
    }
  }
}





function myFunction() {
  var nombre = document.getElementById("btnAgregarDomicilio").value;


  if (nombre == "1") {
    //Se Ocultan los TextBox's para Agregar otro Domicilio:
    //alert("Oculta");

    document.getElementById("linea").style.display = "none";
    document.getElementById("lblDomicilioAux1").style.display = "none";

    document.getElementById('txtCalle2').type = "hidden";
    document.getElementById("lblCalle2").style.display = "none";

    document.getElementById('txtColonia2').type = "hidden";
    document.getElementById("lblColonia2").style.display = "none";

    document.getElementById('txtNumExterior2').type = "hidden";
    document.getElementById("lblNumExterior2").style.display = "none";

    document.getElementById('txtNumeroInterior2').type = "hidden";
    document.getElementById("lblNumeroInterior2").style.display = "none";

    document.getElementById('txtEntreCalles2').type = "hidden";
    document.getElementById("lblEntreCalles2").style.display = "none";

    document.getElementById('txtEstado2').style.display = "none";
    document.getElementById("lblEstado2").style.display = "none";

    document.getElementById('txtCiudad2').type = "hidden";
    document.getElementById("lblCiudad2").style.display = "none";

    document.getElementById('txtCodigoPostal2').type = "hidden";
    document.getElementById("lblCodigoPostal2").style.display = "none";


    document.getElementById('txtReferencias2').style.display = "none";
    document.getElementById("lblReferencias2").style.display = "none";


    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "none";
    document.getElementById("div3").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";


    document.getElementById("btnAgregarDomicilio").value = 0;
    document.getElementById("btnAgregarDomicilio").innerText = "Agregar Más Domicilio(s)";

    document.getElementById("txtNombres").focus();





    //////////
    document.getElementById("linea2").style.display = "none";
    document.getElementById("lblDomicilioAux2").style.display = "none";

    document.getElementById('txtCalle3').type = "hidden";
    document.getElementById("lblCalle3").style.display = "none";

    document.getElementById('txtColonia3').type = "hidden";
    document.getElementById("lblColonia3").style.display = "none";

    document.getElementById('txtNumExterior3').type = "hidden";
    document.getElementById("lblNumExterior3").style.display = "none";

    document.getElementById('txtNumeroInterior3').type = "hidden";
    document.getElementById("lblNumeroInterior3").style.display = "none";

    document.getElementById('txtEntreCalles3').type = "hidden";
    document.getElementById("lblEntreCalles3").style.display = "none";

    document.getElementById('txtEstado3').style.display = "none";
    document.getElementById("lblEstado3").style.display = "none";

    document.getElementById('txtCiudad3').type = "hidden";
    document.getElementById("lblCiudad3").style.display = "none";

    document.getElementById('txtCodigoPostal3').type = "hidden";
    document.getElementById("lblCodigoPostal3").style.display = "none";


    document.getElementById('txtReferencias3').style.display = "none";
    document.getElementById("lblReferencias3").style.display = "none";


    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "none";
    document.getElementById("div3").style.display = "none";


    document.getElementById("btnAgregarDomicilio").value = 0;
    document.getElementById("btnAgregarDomicilio").innerText = "Agregar Más Domicilio(s)";

    document.getElementById("txtNombres").focus();

  }
  else {
    //Aparece los TextBox's para Agregar otro Domicilio:
    //alert("Mostrar");

    document.getElementById("linea").style.display = "block";
    document.getElementById("lblDomicilioAux1").style.display = "block";

    document.getElementById('txtCalle2').type = "text";
    document.getElementById("lblCalle2").style.display = "block";

    document.getElementById('txtColonia2').type = "text";
    document.getElementById("lblColonia2").style.display = "block";

    document.getElementById('txtNumExterior2').type = "text";
    document.getElementById("lblNumExterior2").style.display = "block";

    document.getElementById('txtNumeroInterior2').type = "text";
    document.getElementById("lblNumeroInterior2").style.display = "block";

    document.getElementById('txtEntreCalles2').type = "text";
    document.getElementById("lblEntreCalles2").style.display = "block";

    document.getElementById('txtEstado2').style.display = "block";
    document.getElementById("lblEstado2").style.display = "block";

    document.getElementById('txtCiudad2').type = "text";
    document.getElementById("lblCiudad2").style.display = "block";

    document.getElementById('txtCodigoPostal2').type = "text";
    document.getElementById("lblCodigoPostal2").style.display = "block";

    document.getElementById('txtReferencias2').style.display = "block";
    document.getElementById("lblReferencias2").style.display = "block";

    document.getElementById("div1").style = "block";
    document.getElementById("div2").style = "block";
    document.getElementById("div3").style = "block";












    //alert("Mostrar");

    document.getElementById("linea2").style.display = "block";
    document.getElementById("lblDomicilioAux2").style.display = "block";

    document.getElementById('txtCalle3').type = "text";
    document.getElementById("lblCalle3").style.display = "block";

    document.getElementById('txtColonia3').type = "text";
    document.getElementById("lblColonia3").style.display = "block";

    document.getElementById('txtNumExterior3').type = "text";
    document.getElementById("lblNumExterior3").style.display = "block";

    document.getElementById('txtNumeroInterior3').type = "text";
    document.getElementById("lblNumeroInterior3").style.display = "block";

    document.getElementById('txtEntreCalles3').type = "text";
    document.getElementById("lblEntreCalles3").style.display = "block";

    document.getElementById('txtEstado3').style.display = "block";
    document.getElementById("lblEstado3").style.display = "block";

    document.getElementById('txtCiudad3').type = "text";
    document.getElementById("lblCiudad3").style.display = "block";

    document.getElementById('txtCodigoPostal3').type = "text";
    document.getElementById("lblCodigoPostal3").style.display = "block";

    document.getElementById('txtReferencias3').style.display = "block";
    document.getElementById("lblReferencias3").style.display = "block";

    document.getElementById("div1").style = "block";
    document.getElementById("div2").style = "block";
    document.getElementById("div3").style = "block";
    document.getElementById("div10").style = "block";
    document.getElementById("div11").style = "block";
    document.getElementById("div12").style = "block";


    document.getElementById("btnAgregarDomicilio").value = 1;
    document.getElementById("btnAgregarDomicilio").innerText = "Ocultar Domicilio(s)";
    document.getElementById("txtReferencias2").focus();
    document.getElementById("txtCalle2").focus();
  }
}

