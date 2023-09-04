<!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
      © 2015-2023 Cotizador web desarrollado por <a href='#' target='_blank'>#</a> 
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- All Jquery -->
  <!-- ============================================================== -->

 <script src="assets/plugins/jquery-main/jquery370.min.js"></script>
<script src="assets/plugins/bootstrap530/dist/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap530/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/bootstrap530/dist/js/popper.min.js"></script>
<script src="assets/plugins/mdb-bootstrap/js/mdb.min.js"></script>
<script type="text/javascript" src="assets/font-awesome/js/all.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<!-- Otras librerías según tus necesidades -->
<script src="dist/jquery-validation-1.19.5/lib/jquery.js"></script>
<script src="dist/jquery-validation-1.19.5/dist/jquery.validate.js"></script>
<script type="text/javascript" src="dist/jquery-validation-1.19.5/demo/marketo/jquery.maskedinput.js"></script>
<script type="text/javascript" src="dist/jquery-validation-1.19.5/demo/marketo/mktSignup.js"></script>  
<script src="assets/plugins/select2/select2.min.js"></script>
<!-- Tu código personalizado -->
<script src="assets/js/custom.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>


                    <!--Validation -->
<script language="javascript" type="text/javascript">
/* var objeto2;
function decimales(objeto, e) {
    var keynum
    var keychar
    var numcheck
    if (window.event) {
        // IE/
        keynum = e.keyCode
    } else if (e.which) {
        // Netscape/Firefox/Opera//
        keynum = e.which
    }
    if ((keynum >= 35 && keynum <= 37) || keynum == 8 || keynum == 9 || keynum == 46 || keynum == 39) {
        return true;
    }
    if (keynum == 190 || keynum == 110 || (keynum >= 95 && keynum <= 105) || (keynum >= 48 && keynum <= 57)) {
        posicion = objeto.value.indexOf('.');
        if (posicion == -1) {
            return true;
        } else {
            if (!(keynum == 190 || keynum == 110)) {
                objeto2 = objeto;
                t = setTimeout('dosDecimales()', 150);
                return true;
            } else {
                objeto2 = null;
                return false;
            }
        }
    } else {
        return false;
    }
}
function dosDecimales() {
    var objeto = objeto2;
    var posicion = objeto.value.indexOf('.');
    var decimal = 2;
    if (objeto.value.length - posicion < decimal) {
        objeto.value = objeto.value.substr(0, objeto.value.length - 1);
    } else {
        objeto.value = objeto.value.substr(0, posicion + decimal + 1);
    }
    return;
}
function enteros(objeto, e) {
    var keynum
    var keychar
    var numcheck
    if (window.event) {
        // IE/
        keynum = e.keyCode
    } else if (e.which) {
        // Netscape/Firefox/Opera//
        keynum = e.which
    }
    if ((keynum >= 35 && keynum <= 37) || keynum == 8 || keynum == 9 || keynum == 46 || keynum == 39) {
        return true;
    }
    if ((keynum >= 95 && keynum <= 105) || (keynum >= 48 && keynum <= 57)) {
        return true;
    } else {
        return false;
    }
}
// validar formato de telefono
var patron1 = new Array(4, 4)
function fnc1(elem, separador, pat, numerico) {
    if (elem.valoranterior != elem.value) {
        valor = elem.value;
        largo = valor.length;
        valor = valor.split(separador);
        valor2 = "";
        for (i = 0; i < valor.length; i++) {
            valor2 += valor[i];
        }
        if (numerico) {
            for (j = 0; j < valor2.length; j++) {
                if (isNaN(valor2.charAt(j))) {
                    letra = new RegExp(valor2.charAt(j), "g");
                    valor2 = valor2.replace(letra, "");
                }
            }
        }
        valor = "";
        valor3 = new Array();
        for (n = 0; n < pat.length; n++) {
            valor3[n] = valor2.substring(0, pat[n]);
            valor2 = valor2.substr(pat[n]);
        }
        for (q = 0; q < valor3.length; q++) {
            if (q == 0) {
                valor = valor3[q];
            } else {
                if (valor3[q] != "") {
                    if (valor3[1] > 999999) { // error. un año no tiene tantos meses
                        valor = valor3[0];
                    } else if (valor3[2] > 9999) { // error. un mes no tiene tantos días
                        valor = valor3[0] + separador + valor3[1];
                    } else if ((valor3[1] == 04 || valor3[1] == 06 || valor3[1] == 09 || valor3[1] == 11) && valor3[
                            2] >= 31) { // error. el mes no tiene tantos días
                        valor = valor3[0] + separador + valor3[1];
                    } else if (valor3[1] == 06) { // error. el mes no tiene tantos días
                        valor = valor3[0] + separador + valor3[1];
                    } else if (valor3[1] == 04) { // error. no es un año bisiesto
                        valor = valor3[0] + separador + valor3[1];
                    } else {
                        valor += separador + valor3[q];
                    }
                }
            }
        }
        elem.value = valor;
        elem.valoranterior = valor;
    }
}
function caracteres(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8 || tecla == 37 || tecla <= 38 || tecla == 39 || tecla <= 40) return true;
    patron = /[A-Za-z]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
function cal() {
    try {
        var a = parseFloat(document.guardar_orden.totalP.value),
            b = parseFloat(document.guardar_orden.anticipo.value);
        document.guardar_orden.pendiente.value = a - b;
    } catch (e) {}
}
// validar formato de dui
var patrondui = new Array(8, 1)
function fncdui(elem, separador, pat, numerico) {
    if (elem.valoranterior != elem.value) {
        valor = elem.value;
        largo = valor.length;
        valor = valor.split(separador);
        valor2 = "";
        for (i = 0; i < valor.length; i++) {
            valor2 += valor[i];
        }
        if (numerico) {
            for (j = 0; j < valor2.length; j++) {
                if (isNaN(valor2.charAt(j))) {
                    letra = new RegExp(valor2.charAt(j), "g");
                    valor2 = valor2.replace(letra, "");
                }
            }
        }
        valor = "";
        valor3 = new Array();
        for (n = 0; n < pat.length; n++) {
            valor3[n] = valor2.substring(0, pat[n]);
            valor2 = valor2.substr(pat[n]);
        }
        for (q = 0; q < valor3.length; q++) {
            if (q == 0) {
                valor = valor3[q];
            } else {
                if (valor3[q] != "") {
                    if (valor3[1] > 999999) { // error. un año no tiene tantos meses
                        valor = valor3[0];
                    } else if (valor3[2] > 9999) { // error. un mes no tiene tantos días
                        valor = valor3[0] + separador + valor3[1];
                    } else if ((valor3[1] == 04 || valor3[1] == 06 || valor3[1] == 09 || valor3[1] == 11) && valor3[
                            2] >= 31) { // error. el mes no tiene tantos días
                        valor = valor3[0] + separador + valor3[1];
                    } else if (valor3[1] == 06) { // error. el mes no tiene tantos días
                        valor = valor3[0] + separador + valor3[1];
                    } else if (valor3[1] == 04) { // error. no es un año bisiesto
                        valor = valor3[0] + separador + valor3[1];
                    } else {
                        valor += separador + valor3[q];
                    }
                }
            }
        }
        elem.value = valor;
        elem.valoranterior = valor;
    }
}

function formatearNIT(input) {
  var nit = input.value.replace(/-/g, '').replace(/\D/g, ''); // Eliminar caracteres no numéricos
  var nitFormateado = '';

  for (var i = 0; i < nit.length; i++) {
    nitFormateado += nit[i];
    if ((i === 3 || i === 9 || i === 12) && i !== nit.length - 1) {
      nitFormateado += '-';
    }
  }
  
  var maxLongitud = 17; // Longitud máxima del formato del NIT

  if (nitFormateado.length >= maxLongitud) {
    input.value = nitFormateado.substring(0, maxLongitud);
    $('#mod_nit').removeClass('is-invalid');
    $('#mod_nit').addClass('is-valid');
  } else  //if (nitFormateado.length < maxLongitud)
  {
    input.value = nitFormateado;
   $('#mod_nit').removeClass('is-valid');
   $('#mod_nit').addClass('is-invalid');
   
  }
}  */

$('#mod_tipo_cliente').change(function() {
 var selectedOption = $(this).val(); // Obtener el valor seleccionado del select
  if ($(this).val() == '1') {
    $('#natural').slideUp(300);
    $('#natural2').slideUp(300);
    $('#estado_cli').removeClass();
    $('#tipo_cli').removeClass();
    $('#estado_cli').addClass('col-md-6');
    $('#tipo_cli').addClass('col-md-6');

  } else if($(this).val() == '2') {
    $('#natural').slideDown(300);
    $('#natural2').slideDown(300);
    $('#estado_cli').removeClass();
    $('#tipo_cli').removeClass();
    $('#estado_cli').addClass('col-md-3');
    $('#tipo_cli').addClass('col-md-3');

 } else if($(this).val() == '3') {
    $('#natural').slideUp(300);
    $('#natural2').slideDown(300);
    $('#estado_cli').removeClass();
    $('#tipo_cli').removeClass();
    $('#estado_cli').addClass('col-md-3');
    $('#tipo_cli').addClass('col-md-3');
 }
}).change();

// Example starter JavaScript for disabling form submissions if there are invalid fields
/* (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        form.classList.add('was-validated')
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        
      }, false)
    })
})() */

//verificador estricto de ingreso de datos segun cantidad minima de caracteres
/* const cantidadInput = document.getElementById('mod_nit');
const alertaLabel = document.getElementById('alerta_nit');

cantidadInput.addEventListener('blur', function() {
  const cantidadRequerida = 17; // Cantidad requerida mínima

  if (cantidadInput.value.length < cantidadRequerida) {
    cantidadInput.focus();
    alertaLabel.style.display = 'inline'; // Mostrar el mensaje de alerta
    
  } else {
    alertaLabel.style.display = 'none'; // Ocultar el mensaje de alerta
  }
});  

pattern=".{17,}" maxlength="17" //limitador de caracteres para un input

*/

fecha.min = new Date().toISOString().split("T")[0];
mod_fecha.min = new Date().toISOString().split("T")[0];
</script>



