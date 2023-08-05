<?php

  include 'dist/ajax/is_logged.php';//Archivo verifica que el usario que intenta acceder a la URL esta logueado
  
  require_once "dist/config/db.php"; //Contiene las variables de configuracion para conectar a la base de datos
  require_once "dist/config/conexion.php"; //Contiene funcion que conecta a la base de datos
  require_once "config/conexion2.php";
$user     = new CodeaDB();
$title = "Clientes | Cotizador";
$clientes = "active"; 
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include "head.php";
  ?>
 <style>
  /* Estilo para el cuadro de selección cuando es válido */
  .is-valid + .select2-container--default .select2-selection--single {
    border-color: #28a745;
  }
  /* Estilo para el cuadro de selección cuando es inválido */
  .is-invalid + .select2-container--default .select2-selection--single {
    border-color: #dc3545;
  }

  /* Estilos para el select2 */
select {
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 3px;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

/* Estilos cuando el select2 tiene el foco */
/* select.focus {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
}  */

/* Estilos cuando el select2 es válido */
.selectValid {
  border-color: #28a745;
  box-shadow: 0 0 0 0.25rem rgba(40, 167, 69, 0.25);
}

/* Estilos cuando el select2 no es válido */
.selectInvalid {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

/* Estilos de box-shadow para el select2 en estado is-invalid */
.selectInvalid + .select2-container {
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
  border-color: #dc3545; /* Bordes de color de validación */
  border-radius: 3px; /* Bordes redondeados */
}

/* Estilos de box-shadow para el select2 en estado is-valid */
.selectValid + .select2-container {
  box-shadow: 0 0 0 0.25rem rgba(40, 167, 69, 0.25);
  border-color: #28a745; /* Bordes de color de validación */
  border-radius: 3px; /* Bordes redondeados */
}
/* .select2-container .select2-dropdown .select2-search .select2-search__field:focus {
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}
 */


/* Estilos cuando el dropdown del select2 está abajo */
/* .select2-dropdown.select2-dropdown--below {
  border-color: #86b7fe;
} */

</style>
</head>

<body class="fix-header card-no-border">
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <?php
    include "navbar.php";
    ?>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
          <div class="col-md-10 col-10 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">Clientes</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Clientes</li>
            </ol>
          </div>
          <div class="col-md-2 col-2 d-md-flex justify-content-md-end h-100">
            <button class="btn float-right  btn-success" data-bs-toggle="modal" data-bs-target="#addModalClient"><i
                class="mdi mdi-plus-circle"></i>
              <span class='hidden-sm-down'>Nuevo cliente</span></button>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
      <?php
        
        include "modal/registro_clientes.php";
        include "modal/editar_cliente.php";
        include "modal/agregar_contacto.php";
        include "modal/actualizar_contacto.php";
        ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Buscar clientes</h4>
                <div class="row">
                  <div class="col-sm-6 nopadding">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                          <input id="q" type="text" value="" name="q"
                            data-bts-button-down-class="btn btn-secondary "
                            data-bts-button-up-class="btn btn-secondary " class="form-control"
                            placeholder="Buscar por nombre" onkeyup='load(1);'>
                          <span class="input-group-btn input-group-append">
                            <button class="btn btn-secondary  bootstrap-touchspin-up" type="button"
                              onclick="load(1);"><i class='fa fa-search'></i> Buscar</button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <span id="loader"></span>
                  </div>
                </div>
                <div class="row">
                  <div id="resultados" class='col-sm-12 '></div><!-- Carga los datos ajax -->
                  <div class='outer_div' class='col-sm-12 ' style="width:100%"> </div><!-- Carga los datos ajax -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
     <!--  <script type="text/javascript" >

$.fn.modal.Constructor.prototype.enforceFocus = function() {};	
      </script> -->
      <?php
      include "footer.php";
      ?>
      <script type="text/javascript" src="dist/js/clientes.js"></script>
      <script type="text/javascript" src="jquery-validation/demo/marketo/jquery.maskedinput.js"></script>
    
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
      <script type = "text/javascript">
         
$("#mod_depto").change(function(){
$.ajax({
    data:  "id="+$("#mod_depto").val(),
    url:   'get_municipios.php',
    type:  'post',
    dataType: 'json',
    beforeSend: function () {  },
    success:  function (response) {
        var html = "";
        html+= '<option value="">Seleccione</option>';
        $.each(response, function( index, value ) {
            html+= '<option value="'+value.id+'">'+value.nombre+"</option>";
        });
        $("#mod_muni").html(html);
        
    },
    error:function(){
         alert("error")
    }
});
});




 /*  var datos = "Esto es un ejemplo de datos.";
document.getElementById("miSpan").textContent = datos;
 */

  
$('#editCliente').on('shown.bs.modal focus keyup change', function () {
  $('#editar_cliente').validate().form();
	var nomcli = document.getElementById("mod_nombre_cliente").value;
  var idC =  document.getElementById("mod_id").value;
	$('#idT').text(': ' + nomcli + ' ID: ' + idC);
});


  // Función para validar la máscara de DUI de El Salvador
  $.validator.addMethod('DUI', function(value, element) {
    return this.optional(element) || /^\d{8}-?\d$/.test(value);
  }, 'Por favor, ingresa un número de DUI válido.');

  // Función para validar la máscara de NIT de El Salvador
  $.validator.addMethod('NIT', function(value, element) {
    return this.optional(element) || /^\d{4}-?\d{6}-?\d{3}-?\d$/.test(value);
  }, 'Por favor, ingresa un número de NIT válido.');

  // Función para validar la máscara de NIT de El Salvador
  $.validator.addMethod('NRC', function(value, element) {
    return this.optional(element) || /^\d+-\d$/.test(value);
  }, 'Por favor, ingresa un número de NRC válido.');

  // Función para validar la máscara de número telefono de El Salvador
  $.validator.addMethod('phoneSALV', function(value, element) {
    return this.optional(element) || /^\+?503 \d{4}-?\d{4}$/.test(value);
  }, 'Por favor, ingresa un número de teléfono válido.');

 /*  $.validator.addMethod('select', function(value, element, arg){
  return arg != value;
 }, "Seleccione una opción"); */


  // Máscara de DUI de El Salvador
  $('#mod_dui_cliente').mask('99999999-9');

  // Máscara de NIT de El Salvador
  $('#mod_nit').mask('9999-999999-999-9');

  // Máscara de NRC de El Salvador
  //$("#mod_registro").mask("");

  // Máscara de teléfono de El Salvador
  $('#mod_tel').mask('+503 9999-9999');

  // Agregar asterisco a todos los labels de los campos requeridos
  //$('label.required').append('&nbsp;<//strong>*<//strong>&nbsp;');

    // Inicializar los select2
    /* $('.validate').select2({
      //placeholder: 'Selecciona una opción',
      // Otras opciones y configuraciones de Select2 si es necesario
    }); */

    
    $('#actualizar_datos').on('click', function(event) {
    event.preventDefault(); // Evitar el envío automático del formulario
    
    // Realizar la validación manualmente
    if ($('#editar_cliente').valid()) {
      //alert("¡Formulario enviado con éxito!");
      $('#editar_cliente').submit(); // Envío del formulario
    } else {
      //alert("Por favor, completa correctamente todos los campos.");
    }
  });

  
    // Configurar las reglas de validación para el formulario
    $('#editar_cliente').validate({
      /* debug: true, */
      rules: {
        mod_dui_cliente: {
        required: true,
        DUI: true
        },

        mod_nombre_cliente: {
        required: true
        },

        mod_estado_cliente: {
        required: true
        },

        mod_tipo_cliente: {
        required: true
        },
        
        mod_nomcom_cliente: {
        required: true
        },

        mod_giro: {
        required: true
        },

        mod_nit: {
        required: true,
        NIT: true
        },

        mod_registro: {
          required: true,
					minlength: 2,
          NRC: true
        },

        mod_email: {
						required: true,
						email: true
				},

        mod_tel: {
        required: true,
        phoneSALV: true
        },

        mod_depto: {
        required: true
        },

        mod_muni: {
        required: true
        },

        mod_direccion: {
        required: true
        }
      },
      messages: {
        mod_dui_cliente: {
        required: 'Por favor, ingresa un número de DUI',
        DUI: 'DUI inválido'
        },

        mod_nombre_cliente: {
        required: 'Por favor, ingresa un nombre valido'
        },

        mod_estado_cliente: {
        required: 'Por favor, selecciona una opcion'
        },

        mod_tipo_cliente: {
        required: 'Por favor, selecciona una opcion'
        },

        mod_nomcom_cliente: {
        required: 'Por favor, ingresa un nombre valido'
        },

        mod_giro: {
        required: 'Por favor, selecciona una opcion'
        },

        mod_nit: {
        required: 'Por favor, ingresa un número de NIT',
        NIT: 'NIT inválido'
        },

        mod_registro: {
          required: 'Por favor, ingresa un número de NRC',
          minlength: 'Por favor, ingresa como minimo 2 números',
          NRC: 'NRC inválido'
        },

        mod_email: {
            required:'Por favor, ingresa un correo electronico',
            email: 'Correo electronico inválido'
        },

        mod_tel: {
          required: 'Por favor, ingresa un número de teléfono',
          phoneSALV: 'Número de teléfono inválido'
        },

        mod_depto: {
        required: 'Por favor, selecciona una opcion'
        },

        mod_muni: {
        required: 'Por favor, selecciona una opcion'
        },

        mod_direccion: {
        required: 'Por favor, ingresa una direccion'
        }
      },
      errorElement: 'em',
      errorPlacement: function(error, element) {
      error.addClass('invalid-feedback');
      //error.appendTo(element.parent().next());
      //error.insertAfter(element);
      element.closest('.form-label-group').append(error);
      

      },
      /* highlight: function(element, errorClass, validClass) {
        $(element).addClass('error-field');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('error-field');
      }, */
      /* highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid').removeClass('is-valid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid').addClass('is-valid');
      }, */
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid').removeClass('is-valid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid').addClass('is-valid');
      },

      /* invalidHandler: function(event, validator) {
    // Acciones a realizar cuando el formulario no es válido
    //$('#actualizar_datos').attr('type', false);
    //alert("Por favor, completa correctamente todos los campos.");
    return false;
  },
  submitHandler: function(form) {
    // Acciones a realizar cuando el formulario es válido y se envía
    //$('#actualizar_datos').prop('disabled', true);
    if ($('#editar_cliente').valid()) {
      
    //alert("¡Formulario enviado con éxito!");
    form.submit(); // Envío del formulario de manera predeterminada
  }}
 */
    });
 
$('select').select2().on('select2:open change', function() {
  // Realizar la validación manualmente
  if ($(this).hasClass('is-valid')) {
    $(this).removeClass('selectInvalid ');
    $(this).addClass('selectValid');
  } 
  else if ($(this).hasClass('is-invalid')) {
    $(this).removeClass('selectValid ');
    $(this).addClass('selectInvalid ');
  }

  $(this).trigger('blur');

  // Puedes realizar otras acciones o llamadas a funciones aquí si es necesario
}).on('select2:close', function() {
  // Realizar la validación manualmente
  //if ($(this).hasClass('is-valid')) {
    $(this).removeClass('selectInvalid ');
    $(this).removeClass('selectValid ');
  /* } 
  else if ($(this).hasClass('is-invalid')) {
    $(this).removeClass('selectValid ');
    $(this).removeClass('selectInvalid ');
  }
 */
  $(this).trigger('blur');
 
});


    

    
   
  

 
  

/*  $("#editCliente").on("hidden.bs.modal", function (event) {
	// Restablecer los campos de formulario a su estado original
	$('#editar_cliente').destroy();
  });
   */
  // Código para abrir otro registro o modal
// ...

// Función para destruir las validaciones y restablecer el formulario
/* function resetFormValidation() {
  var formulario = $("#editar_cliente"); // Reemplaza con el ID de tu formulario
  formulario.validate().resetForm(); // Destruye las validaciones
  formulario.find(".form-group").removeClass("is-invalid"); // Elimina las clases de validación
  formulario[0].reset(); // Limpia los campos del formulario
}

// Llamar a la función cuando se abre otro registro o modal
// Por ejemplo, al hacer clic en el botón para abrir otro registro/modal
$("#editCliente").on("hidden.bs.modal", function(event) {
  resetFormValidation();
  // Código para abrir el otro registro o modal
  // ...
});
 */


/* $('#actualizar_datos').click(funtion({
      if (errorPlacement == error){
        return false;
      }else{
        return true;
      }
    })); */


/* 
var form = document.getElementById('editar_cliente');
	form.onsubmit = function(e){
		//alert("!enviado!");
		e.preventDefault();
    return true;
	}
   */
/* $('#editar_cliente').validate({

  //$(this).select2({minimumResultsForSearch: 0});
  //$(this).attr('minimumResultsForSearch': 0);
});  */


</script>

    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
</body>

</html>