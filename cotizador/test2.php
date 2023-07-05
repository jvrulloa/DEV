<?php
include 'dist/ajax/is_logged.php';  
require_once "dist/config/db.php"; //Contiene las variables de configuracion para conectar a la base de datos
  require_once "dist/config/conexion.php"; //Contiene funcion que conecta a la base de datos
  require_once "config/conexion2.php";
  $user     = new CodeaDB();
$title = "Clientes | Cotizador";
$clientes = "active"; 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ejemplo de validación de teléfono</title>
    
    <?php
  include "head.php";
  ?>
  </head>
  <body>
  <div class="" id="editCliente"  role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="">
        <div class="modal-content">
            <div class="modal-header alert alert-success">
                <h5 class="modal-title" id="exampleModalLabel"><i class='fas fa-edit'></i> EDITAR CLIENTE <?php  ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal needs-validation" novalidate method="post" id="editar_cliente" name="editar_cliente" action="test2.php">

                <div class="row">
                        <div class="col-md-5">
                          <div class="form-outline input-group">
                                <input type="text" class="form-control" id="username"name="username" aria-describedby="telCli" required>
                                <label class="form-label" for="username">Teléfono</label>
                                <div id="telCli" class="invalid-feedback">Numero incorrecto.</div>
                          </div>
                        </div>
                         <div class="col-md-5">
                          <div class="form-outline input-group">
                                <input type="text" class="form-control" id="password"name="password" aria-describedby="telCli" required>
                                <label class="form-label" for="password">Teléfono</label>
                                <div id="telCli" class="invalid-feedback">Numero incorrecto.</div>
                          </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="">Actualizar datos</button>
                    </div>
                </form>
            </div>      
        </div>
    </div>
</div>
</div>
</div>



   
  </body>
  <?php
      include "footer.php";
      ?>
     <!--  <script src="assets/plugins/validator/validators.min.js"></script> -->
      
      
      <script language="javascript" type="text/javascript">
     /*  function formatearTel(submit) {
      const phoneNumber = mod_tel.value;
      /* const cantidadInput = document.getElementById('mod_nit');*
      const isValidPhoneNumber = validator.isMobilePhone(phoneNumber, 'es-SV');

  if (isValidPhoneNumber== true) {
    $('#mod_tel').removeClass('is-invalid');
    $('#mod_tel').addClass('is-valid');
  } 
  else
  {
   $('#mod_tel').removeClass('is-valid');
   $('#mod_tel').addClass('is-invalid');
   
  }
}  */


const { body, validationResult } = require('express-validator');

app.post(
  '/editar_cliente',
  // username must be an email
  body('username').isEmail(),
  // password must be at least 5 chars long
  body('password').isLength({ min: 5 }),
  (req, res) => {
    // Finds the validation errors in this request and wraps them in an object with handy functions
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(400).json({ errors: errors.array() });
    }

    User.create({
      username: req.body.username,
      password: req.body.password,
    }).then(user => res.json(user));
  },
);
    </script>

</html>
