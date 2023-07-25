<?php
include 'dist/ajax/is_logged.php'; //Archivo verifica que el usario que intenta acceder a la URL esta logueado
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
            <button class="btn float-right  btn-success" data-bs-toggle="modal" data-bs-target="#addModalClient"><i class="mdi mdi-plus-circle"></i>
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
                          <input id="q" type="text" value="" name="q" data-bts-button-down-class="btn btn-secondary " data-bts-button-up-class="btn btn-secondary " class="form-control" placeholder="Buscar por nombre" onkeyup='load(1);'>
                          <span class="input-group-btn input-group-append">
                            <button class="btn btn-secondary  bootstrap-touchspin-up" type="button" onclick="load(1);"><i class='fa fa-search'></i> Buscar</button>
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
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
      <script type="text/javascript">
        $("#mod_depto").change(function() {
          $.ajax({
            data: "id=" + $("#mod_depto").val(),
            url: 'get_municipios.php',
            type: 'post',
            dataType: 'json',
            beforeSend: function() {},
            success: function(response) {
              var html = "";
              html += '<option value="">Seleccione</option>';
              $.each(response, function(index, value) {
                html += '<option value="' + value.id + '">' + value.nombre + "</option>";
              });
              $("#mod_muni").html(html);
            },
            error: function() {
              alert("error")
            }
          });
        });
        $.validator.setDefaults({
          submitHandler: function() {
            alert("submitted!");
          }
        });
        $(document).ready(function() {
          //$("select").select2();
          $("#editar_cliente").validate({
              rules: {
                mod_nombre_cliente: "required",
                mod_nomcom_cliente: "required",
                mod_email: {
                  required: true,
                  email: true
                },
                mod_estado_cliente: {
                  required: true
                },
                mod_depto: {
                  required: true
                }
              },
              messages: {
                mod_nombre_cliente: "Ingresa un nombre valido",
                mod_nomcom_cliente: "Ingresa el nombre comercial",
                mod_email: "Ingresa un correo valido",
                mod_estado_cliente: {
                  required: "Ingrese una opcion valida de la lista"
                },
                mod_depto: {
                  required: "Ingrese una opcion valida de la lista"
                }
              },
              errorElement: "em",
              errorPlacement: function(error, element) {
                // Add the `invalid-feedback` class to the error element
                error.addClass("invalid-feedback");
                if (element.hasClass('select2-hidden-accessible')) {
                  error.insertAfter(element.siblings('span.select2'));
                } else {
                  error.insertAfter(element);
                }
              },
              highlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-valid");
                $(element).siblings("label").addClass("error");
                $(element).siblings("label").removeClsss("ok");
              },
              unhighlight: function(element, errorClass, validClass) {
                $(element).addClass("is-valid").removeClass("is-invalid");
                $(element).siblings("label").removeClass("error")
                $(element).siblings("label").addClass("ok");;
              }
            });
            if ($('input[value=""]').length > 0) {
              console.log('some fields are empty!');
            };
        });
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