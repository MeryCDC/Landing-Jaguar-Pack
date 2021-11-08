/* =================================
------------------------------------
	Cryptocurrency - Landing Page Template
	Version: 1.0
 ------------------------------------ 
 ====================================*/


'use strict';


$(window).on('load', function () {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(400).fadeOut("slow");

});

(function ($) {

	/*------------------
		Navigation
	--------------------*/
	$('.responsive-bar').on('click', function (event) {
		$('.main-menu').slideToggle(400);
		event.preventDefault();
	});


	/*------------------
		Background set
	--------------------*/
	$('.set-bg').each(function () {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});


	/*------------------
		Review
	--------------------*/
	var review_meta = $(".review-meta-slider");
	var review_text = $(".review-text-slider");


	review_text.on('changed.owl.carousel', function (event) {
		review_meta.trigger('next.owl.carousel');
	});

	review_meta.owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		items: 3,
		center: true,
		margin: 20,
		autoplay: true,
		mouseDrag: false,
	});


	review_text.owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		items: 1,
		margin: 20,
		autoplay: true,
		navText: ['<i class="ti-angle-left"><i>', '<i class="ti-angle-right"><i>'],
		animateOut: 'fadeOutDown',
		animateIn: 'fadeInDown',
	});



	/*------------------
	   Contact Form
   --------------------*/
	$(".check-form").focus(function () {
		$(this).next("span").addClass("active");
	});
	$(".check-form").blur(function () {
		if ($(this).val() === "") {
			$(this).next("span").removeClass("active");
		}
	});


})(jQuery);

$(document).ready(function () {
	var $cabecera = $('#menu');
	var $imagen = $('#logo');
	var $responsive = $('#bar');
	var previousScroll = 0;
	$(window).scroll(function (event) {
		var scroll = $(this).scrollTop();
		if (scroll > 0) {
			$cabecera.addClass('sticky');
			$imagen.removeClass('logo');
			$imagen.addClass('logosticky');
			$("#logotipo").attr("src", "img/logo-blanco.png");

		} else {
			$cabecera.removeClass('sticky');
			$imagen.removeClass('logosticky');
			$imagen.addClass('logo');
			$("#logotipo").attr("src", "img/logo2.png");
		}
		previousScroll = scroll;
	});
});

/* =================================
------------------------------------
	Cotizador
 ------------------------------------ 
 ====================================*/

$(document).ready(function () {
	$('#cotizador').submit(function (e) {
		e.preventDefault();
		var dataArray = $(this).serializeArray();
		var pesoReal = dataArray[0].value;
		var valorDlls = dataArray[1].value;
		var chkSeguro = document.getElementById('seguro').checked;
		if (chkSeguro) {
			var seguro = dataArray[2].value;
		}
		/* Variables de totales y eso*/
		var TotalFinal = 200;
		var seguro = 0;
		var lbsExtra = 0;
		var diferencialbs = 0;
		var interesValorMxn = 0;
		var valorMxn = valorDlls * 20;
		var peso = Math.ceil(pesoReal);

		/* Peso menor a 3 libras y valor menor a 100 dlls */
		if (peso <= 3 && valorDlls <= 100) {
			if (chkSeguro == true) {
				seguro = valorMxn * 0.05;
				TotalFinal = TotalFinal + seguro;
				document.getElementById("total").innerHTML = "El costo aproximado de su envío será de $" + TotalFinal.toFixed(2) + " MXN. (Con seguro incluido)";
				console.log("Peso menor a 3 libras y valor menor a 100 dlls y con seguro")
			} else {
				document.getElementById("total").innerHTML = "El costo aproximado de su envío será de $" + TotalFinal.toFixed(2) + " MXN. (Sin incluir seguro)";
				console.log("Peso menor a 3 libras y valor menor a 100 dlls y sin seguro")
			}
			console.log(TotalFinal)
		} else {
			/* Sin seguro, con peso menor a 3 y valor de mas de 100 dlls*/
			if (peso <= 3 && valorDlls >= 100 && chkSeguro == false) {
				interesValorMxn = valorMxn * 0.16;
				TotalFinal = TotalFinal + interesValorMxn;
				document.getElementById("total").innerHTML = "El costo aproximado de su envío será de $" + TotalFinal.toFixed(2) + " MXN. (Sin incluir seguro)";
				console.log(TotalFinal)
				console.log("Sin seguro, con peso menor a 3 y valor de mas de 100 dlls")
			}
			/* Con seguro, con peso menor a 3 libras y valor de mas de 100 dlls*/
			else if (peso <= 3 && valorDlls >= 100 && chkSeguro == true) {
				interesValorMxn = valorMxn * 0.16;
				seguro = valorMxn * 0.05;
				TotalFinal = TotalFinal + interesValorMxn + seguro;
				document.getElementById("total").innerHTML = "El costo aproximado de su envío será de $" + TotalFinal.toFixed(2) + " MXN. (Con seguro incluido)";
				console.log(TotalFinal)
				console.log("Con seguro, con peso menor a 3 libras y valor de mas de 100 dlls")
			}
			/* Con seguro, con peso mayor a 3 libras y valor de mas de 100 dlls*/
			else if (peso > 3 && valorDlls >= 101 && chkSeguro == true) {
				diferencialbs = peso - 3;
				lbsExtra = diferencialbs * 75;
				interesValorMxn = valorMxn * 0.16;
				seguro = valorMxn * 0.05;
				TotalFinal = TotalFinal + interesValorMxn + seguro + lbsExtra;
				document.getElementById("total").innerHTML = "El costo aproximado de su envío será de $" + TotalFinal.toFixed(2) + " MXN. (Con seguro incluido)";
				console.log(TotalFinal)
				console.log(peso)
				console.log("Con seguro, con peso mayor a 3 libras y valor de mas de 100 dlls")
			}
			/* Sin seguro, con peso mayor a 3 libras y valor de mas de 100 dlls*/
			else if (peso >= 3 && valorDlls >= 101 && chkSeguro == false) {
				diferencialbs = peso - 3;
				lbsExtra = diferencialbs * 75;
				interesValorMxn = valorMxn * 0.16;
				TotalFinal = TotalFinal + interesValorMxn + lbsExtra;
				document.getElementById("total").innerHTML = "El costo aproximado de su envío será de $" + TotalFinal.toFixed(2) + " MXN. (Sin incluir seguro)";
				console.log(TotalFinal)
				console.log("Sin seguro, con peso mayor a 3 libras y valor de mas de 100 dlls")
			} else if (peso >= 3 && valorDlls <= 100 && chkSeguro == false) {
				diferencialbs = peso - 3;
				lbsExtra = diferencialbs * 75;
				TotalFinal = TotalFinal + lbsExtra;
				document.getElementById("total").innerHTML = "El costo aproximado de su envío será de $" + TotalFinal.toFixed(2) + " MXN. (Sin incluir seguro)";
				console.log(TotalFinal)
				console.log("Sin seguro, valor menor a 100 dlls y exceso de libras")
			} else {
				diferencialbs = peso - 3;
				lbsExtra = diferencialbs * 75;
				seguro = valorMxn * 0.05;
				TotalFinal = TotalFinal + lbsExtra + seguro;
				document.getElementById("total").innerHTML = "El costo aproximado de su envío será de $" + TotalFinal.toFixed(2) + " MXN. (Sin incluir seguro)";
				console.log(TotalFinal)
				console.log("Con seguro, valor menor a 100 dlls y exceso de libras")
			}
		}
		document.getElementById("mostrarTotal").style.display = "block";
	});
});

/* =================================
------------------------------------
	Rastreo 
 ------------------------------------ 
 ====================================*/

$(document).ready(function () {
	$('#rastreo').submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function (data) {
				var dataj = $.parseJSON(data);
				var estatus = '';
				var long = dataj.length;
				var datos = '';
				$.each(dataj, function (i, item) {
					switch (item.estatus) {
						case '0':
							estatus = "Pre-Alerta";
							break;
						case '1':
							estatus = "Ingreso a Bodega NLD";
							break;
						case '2':
							estatus = "En transito";
							break;
						case '3':
							estatus = "Entregado";
							break;
						case '4':
							estatus = "Pago autorizado";
							break;
						default:
							estatus = "Sin registro";
					}
					datos = datos +
						'<tr>' +
						'<td style="text-align: left; font-size:14px">' + item.hora_estatus + '</td>' +
						'<td style="text-align: left; font-size:14px">' + estatus + '</td>' +
						'<td style="text-align: left; font-size:14px">' + item.comentario + ' </td>' +
						'</tr>'
				});
				Swal.fire({
					title: '<strong>Consulta</strong>',
					icon: 'success',
					html:
						'<div class="table-responsive">' +
						'<table class="table table-sm">' +
						'<thead>' +
						'<tr>' +
						'<th style="text-align: left; font-size:16px">Fecha</th>' +
						'<th style="text-align: left; font-size:16px">Estatus</th>' +
						'<th style="text-align: left; font-size:16px">Comentario</th>' +
						'</tr>' +
						'</thead>' +
						'<tbody>' +
						'<tr>' + datos +
						'</tr>' +
						'</tbody>' +
						'</table>' +
						'</div>',
					showCloseButton: true,
					focusConfirm: false,
					buttonsStyling: false,
					customClass: {
						confirmButton: "site-btn sb-gradients"
					}
				})
			}
		})
	})
});
