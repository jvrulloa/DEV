
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JQuery-validation demo | Bootstrap</title>
     <link href="assets/plugins/bootstrap530/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="assets/plugins/select2/select2.min.css" rel="stylesheet" >
    <link href="jquery-ui-themes/jquery-ui.min.css" rel="stylesheet">
     <link href="jquery-ui-themes/jquery-ui.structure.min.css" rel="stylesheet">
      <link href="jquery-ui-themes/jquery-ui.theme.min.css" rel="stylesheet">

<style>
/* .list-header {
  display: flex;
 /*  width: 150px;
  height: 80px;
  background-color: #ececec; */
/* }

.list-component {
  display: flex;
  flex: 1;
  padding-left: 24px;
  padding-right: 24px;
  min-width: 0;         /* NEW */
/* }

.header-container {
  display: flex;
  flex: 1;
  min-width: 0;         /* NEW */
/*}

.header-text {
  display: flex;
  flex-direction: column;
  justify-content: center;
  min-width: 0;         /* NEW */
/*}

span {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}  */
/*
 * WTF, forms?
 * Released under MIT and copyright 2014 Mark Otto.
 * http://wtfforms.com
 *
 * Embedded icons from Open Iconic.
 * Released under MIT and copyright 2014 Waybury.
 * http://useiconic.com/open
 */



/*
 * Checkboxes and radios
 */
/*
.control {
  position: relative;
  display: inline-block;
  padding-left: 1.5rem;
  color: #555;
  cursor: pointer;
}
.control input {
  position: absolute;
  opacity: 0;
  z-index: -1; /* Put the input behind the label so it doesn't overlay text */
}

</STYLE>


</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="border-bottom mb-4 mt-4 pb-2">
                    <div class="alert alert-info" role="alert">
                        <h6>This demo shows how to integrate JQuery-validation and the Bootstrap 4 framework.</h4>
                            <ul>
                                <li><a href="https://getbootstrap.com/" class="alert-link">Bootstrap home project</a>.</li>
                            </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-text">Simple Form</h3>
                    </div>
                    <div class="card-body">
                        <div class="list-container">
  <div class="list-component">
    <div class="list-header">
      <div class="header-text">
        <span>long long long long long long text</span>
      </div>
    </div>
  </div>
</div>

						<form class="form-horizontal" novalidate method="post" id="editar_cliente" name="editar_cliente" >
                        <div id="resultados_cliente"></div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 list-component list-header">
                                <div class="form-group header-container ">
                                    <input type="text" class="form-control header-text" id="mod_dui_cliente" name="mod_dui_cliente" required>
                                    <span class="header-text" for="mod_dui_cliente">Dui cliente</span>
                                    <input type="hidden" id="mod_id" name="mod_id">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-outline form-group">
                                    <input type="text" class="form-control" id="mod_nombre_cliente" name="mod_nombre_cliente">
                                    <label class="form-label" for="mod_nombre_cliente">Nombre cliente</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3" id="estado_cli">
                                <div class="form-label-group border">
                                    <select class="form-control" id="mod_estado_cliente" name="mod_estado_cliente" aria-label="Default select example">
                                        <option value="0" selected>Seleccione</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                    <label for="mod_estado_cliente">Estado del cliente</label>
                                </div>
                            </div>
                            <div class="col-md-3" id="tipo_cli">
                                <div class="form-group border">
                                    <select class="form-control" id="mod_tipo_cliente" name="mod_tipo_cliente" aria-label="Default select example">
                                        <option value="" selected>Seleccione</option>
                                        <option value="1">Natural</option>
                                        <option value="2">Juridico</option>
                                        <option value="3">Exento</option>
                                    </select>
                                    <label for="mod_tipo_cliente">Tipo de cliente</label>
                                </div>
                            </div>
<div class="col-md-6"
                                <div class="form-label-group">



									<input type="text" class="form-control" id="mod_nomcom_cliente" name="mod_nomcom_cliente">
                                    <label class="col-sm-4 form-label" for="mod_nomcom_cliente">Nombre comercial</label>
									 </div>

                            </div>
                        </div>
                        <div class="row nat" id="natural">
                            <div class="col-md-6">
                                <div class="form-label-group in-border">
                                    <select class="form-select" id="mod_giro" name="mod_giro" aria-label="validationServer04Feedback" required>
                                        <option selected disabled value="">Seleccione</option>

                                    </select>
                                    <label for="mod_giro">Giro o actividad economica</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-outline input-group has-validation">
                                    <input type="text" class="form-control" id="mod_nit" name="mod_nit" oninput="formatearNIT(this)" aria-describedby="nitCli" required />
                                    <label class="form-label" for="mod_nit">Nit del cliente</label>
                                    <div id="nitCli" class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-outline input-group">
                                    <input type="text" class="form-control" id="mod_registro" name="mod_registro" aria-describedby="regCli" required>
                                    <label class="form-label" for="mod_registro">Nº de registro fiscal</label>
                                    <div id="regCli" class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-outline">
                                    <input type="email" class="form-control" id="mod_email" name="mod_email" required>
                                    <label class="form-label" for="form12">Correo electrónico</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-outline">
                                    <input type="text" class="form-control" id="mod_tel" name="mod_tel" onkeyup="fnc1(this,'-',patron1,true)" required>
                                    <label class="form-label" for="form12">Teléfono</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-label-group in-border">
                                    <select class="form-control" id="mod_depto" name="mod_depto" aria-label="Default select example" required>
                                        <option value="" selected>Seleccione</option>

                                    </select>
                                    <label for="mod_depto">Departamento</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group in-border">
                                    <select class="form-control" id="mod_muni" name="mod_muni" aria-label="Default select example" required>
                                        <option value="" selected>Seleccione</option>
                                    </select>
                                    <label for="mod_muni">Municipio</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12 col-xlg-12 col-xs-12">
                                <div class="form-outline">
                                    <textarea class="form-control" id="mod_direccion" name="mod_direccion" rows="2" onblur="this.value=this.value.toUpperCase();" required></textarea>
                                    <label class="form-label" for="textAreaExample">Dirección</label>
                                </div>
                            </div>
                        </div>
                        <br>



                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>

                    </form>

                    <br>
                    <br>
                    <form>
<form>
<label for="exampleDataList" class="form-label">Datalist example</label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">
  <option value="San Francisco">
  <option value="New York">
  <option value="Seattle">
  <option value="Los Angeles">
  <option value="Chicago">
</datalist>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
     <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
     <script  type="text/javascript"src="assets/plugins/bootstrap530/dist/js/popper.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap530/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap530/dist/js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>


	 <script type="text/javascript" src="jquery-validation/lib/jquery-3.1.1.js"></script>
    <script  src="jquery-validation/dist/jquery.validate.min.js"></script>

<!-- 	<script src="jquery-validation/Gruntfile.js"></script> -->
    <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
        <script>
	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

	$().ready(function() {

		$("#editar_cliente").validate({
                rules: {
                    mod_nombre_cliente: "required",
                    mod_nomcom_cliente: "required",


                    mod_email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    mod_nombre_cliente: "Please enter your nombre",
                    mod_nomcom_cliente: "Please enter your bussines",


                    mod_email: "Please enter a valid email address"

                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass("invalid-feedback");

                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                }
            });

		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var firstname = $("#mod_nombre_cliente").val();
			var lastname = $("#mod_nomcom_cliente").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "." + lastname;
			}
		});

	</script>

</html>
