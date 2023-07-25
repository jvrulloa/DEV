
<!DOCTYPE html>
<html>
<head>
    <title>JQuery-validation demo | Bootstrap</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	
    <script type="text/javascript" src="lib/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="dist/jquery.validate.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
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
                       <form class="form-horizontal" method="post" id="editar_cliente">
                   
                  <!-- <div class="row">
                        <div class="col-md-6">
                        <div class="form-outline input-group">
                                <input class="form-control" id="mod_dui_cliente"name="mod_dui_cliente" >
                                <label class="form-label input required" for="mod_dui_cliente">Dui cliente</label>
                                <input type="hidden" id="mod_id" name="mod_id">
                            </div>
                        </div>
 -->
                      
                         
							<div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="mod_nombre_cliente">Nombre cliente
                                </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="mod_nombre_cliente" name="mod_nombre_cliente" placeholder="First name" />
                                </div>
                            </div>
                              
                       
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3" id="estado_cli">
                            <div class="form-label-group in-border">
                                <select class="form-control" id="mod_estado_cliente" name="mod_estado_cliente" aria-label="Default select example">
                                        <option value="0" selected>Seleccione</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>      
                                </select>
                                <label  for="mod_estado_cliente">Estado del cliente</label>
                            </div>
                        </div>
                        <div class="col-md-3" id="tipo_cli">
                            <div class="form-label-group in-border">
                                <select class="form-control" id="mod_tipo_cliente" name="mod_tipo_cliente" aria-label="Default select example">
                                        <option value="" selected>Seleccione</option>
                                        <option value="1">Natural</option>
                                        <option value="2">Juridico</option>
                                        <option value="3">Exento</option>
                                </select>
                                <label for="mod_tipo_cliente">Tipo de cliente</label>
                            </div>
                        </div>
                        <div class="col-md-6" id="natural2">
                            <div class="form-outline">
                                <input type="text" class="form-control" id="mod_nomcom_cliente" name="mod_nomcom_cliente" onblur="this.value=this.value.toUpperCase();"/>
                                <label class="form-label" for="mod_nomcom_cliente">Nombre comercial</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row nat" id="natural">
                        <div class="col-md-6">
                             <div class="form-label-group in-border">
                                <select class="form-select" id="mod_giro" name="mod_giro">
                                    <option selected disabled value="">Seleccione</option>
                                     <option value="1" selected>Seleccione1</option>
								 <option value="2" selected>Seleccione2</option>
                                </select>
                                <label for="mod_giro">Giro o actividad economica</label>
                             </div>
                        </div> 
                        <div class="col-md-3">
                        <div class="form-outline input-group has-validation">
                                <input type="text" class="form-control" id="mod_nit" name="mod_nit" aria-describedby="nitCli"/>
                                <label class="form-label" for="mod_nit">Nit del cliente</label>
                                <div id="nitCli" class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-outline input-group">
                                    <input type="text" class="form-control" id="mod_registro" name="mod_registro" aria-describedby="regCli">
                                    <label class="form-label" for="mod_registro">Nº de registro fiscal</label>
                                    <div id="regCli" class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div> 
                    </div>    
                    <div class="row">
                        <div class="col-md-7">
                        <div class="form-outline input-group">
                                <input type="text" class="form-control" id="mod_email"name="mod_email"/>
                                <label class="form-label input required" for="mod_email">Correo electrónico</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-outline input-group">
                                <input class="form-control" id="mod_tel" name="mod_tel">
                                <label class="form-label input required" for="mod_tel">Teléfono</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-label-group in-border">
                                <select class="form-control" id="mod_depto" name="mod_depto" aria-label="Default select example">
                                <option value="" selected>Seleccione</option>
								 <option value="2" selected>Seleccione2</option>
                                 <option value="1">Natural</option>
                                        <option value="2">Juridico</option>
                                        <option value="3">Exento</option>
                                </select>
                                <label for="mod_depto">Departamento</label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group in-border">
                                
                                <select class="form-control" id="mod_muni" name="mod_muni" aria-label="Default select example">
                                <option value="" selected>Seleccione</option>
								 <option value="1" selected>Seleccione1</option>
								 <option value="2" selected>Seleccione2</option>
                                </select>
                                <label for="mod_muni">Municipio</label>
                            </div>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xlg-12 col-xs-12">
                            <div class="form-outline">
                                <textarea class="form-control" id="mod_direccion" name="mod_direccion" rows="2" onblur="this.value=this.value.toUpperCase();"></textarea>
                                <label class="form-label" for="textAreaExample">Dirección</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="actualizar_datos"name="signup" value="Sign up">Sign up<>Actualizar datos</button>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        /* $.validator.setDefaults({
            submitHandler: function() {
                alert("submitted!");
            }
        }); */
        $(document).ready(function() {
            $("#editar_cliente").validate({
                rules: {
                    mod_nombre_cliente: "required",
                    mod_nombre_cliente: "required",
                 
                    
                    mod_email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    mod_nombre_cliente: "Please ,enter your firstname",
                    lastname: "Please enter your lastname",
               
                
                    email: "Please enter a valid email address"
                    
                },
                errorElement: "div",
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
        });
    </script>
</body>
</html>