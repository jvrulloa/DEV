
<?php
// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once "dist/libraries/password_compatibility_library.php";
}
// include the configs / constants for the database connection
require_once "dist/config/db.php";
// load the login class
require_once "dist/classes/Login.php";
// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();
// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    if ($_SESSION['user_level'] == 1) {
        // the user is logged in. you can do whatever you want here.
        // for demonstration purposes, we simply show the "you are logged in" view.
        header("location: clientes.php");
        /*  }  elseif ($_SESSION['user_level'] == 22) {
              header("location: ordenes.php");
          } elseif ($_SESSION['user_level'] == 33) {
              header("location: ordenes.php");
          }elseif ($_SESSION['user_level'] == 1) {
              header("location: ordenes.php");
          }*/
    }
} else {
$dormant="";

	$clientes="active";
	$users="";
	$title="Login | Cotizador";
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include "head.php";
  ?>
</head>

<body>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(assets/images/background/pic2.jpg);">
            <div class="login-box card">
            <div class="card-body">

                <form class="form-horizontal form-material"  method="post" accept-charset="utf-8" action="login.php" name="loginform" autocomplete="off" role="form">
                            <?php
// show potential errors / feedback (from login object)
    if (isset($login)) {
        if ($login->errors) {
            ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
          <strong>Error!</strong>
          <?php
foreach ($login->errors as $error) {
                echo $error;
            }
            ?>
        </div>
        <?php
}
        if ($login->messages) {
            ?>
        <div class="alert alert-success alert-dismissible" role="alert">
          <strong>Aviso!</strong>
          <?php
foreach ($login->messages as $message) {
                echo $message;
            }
            ?>
        </div>
        <?php
}
    }
    ?>
                    <h3 class="box-title mb-3">Inicio de sesión</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <span id="reauth-email" class="reauth-email"></span>
        <input class="form-control" onkeypress="return caracteres(event)" onblur="this.value=this.value.toUpperCase();"  placeholder="Usuario" name="user_name" type="text" value="" autofocus="" required>
                    </div></div>
                    <div class="form-group">
                        <div class="col-xs-12">


          <input class="form-control" placeholder="Contraseña" name="user_password" type="password" value="" autocomplete="off" required> </div>
                    </div>
                    <!--<div class="form-group">
                        <div class="col-md-12 text-center">
                             <b> Usuario:</b> demo <br><b>Contraseña:</b> demo2020 </div>
                    </div>-->
                    <div class="form-group text-center mt-3">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="login">Ingresar</button>
                        </div>
                    </div>


                </form>

            </div>
          </div>
        </div>

    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
      <?php
include "footer.php";
    ?>

</body>
</html>
<?php
}
?>