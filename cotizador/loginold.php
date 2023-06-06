<?php
// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once "libraries/password_compatibility_library.php";
}
// include the configs / constants for the database connection
require_once "dist/config/db.php";
// load the login class
require_once "classes/Login.php";
// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();
// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    if ($_SESSION['user_level'] == 11) {
        // the user is logged in. you can do whatever you want here.
        // for demonstration purposes, we simply show the "you are logged in" view.
        header("location: ordenes.php");
    } elseif ($_SESSION['user_level'] == 22) {
        header("location: ordenes.php");
    } elseif ($_SESSION['user_level'] == 33) {
        header("location: ordenes.php");
    }elseif ($_SESSION['user_level'] == 1) {
        header("location: ordenes.php");
    }
} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <link rel=icon href='img/ts.png' sizes="32x32" type="image/png">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
  <title>Login | TONY SPORTSWEAR</title>
  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="dist/page/css/bootstrap.min.css" crossorigin="anonymous">
  <style rel="stylesheet">
    .footer {
      position: fixed;
      left: 0px;
      bottom: -20px;
      height: 50px;
      width: 100%;
    }

    .navbar-default1 {
      background-color: #008080;
      border-color: #2980b9;
    }
  </style>
  <!-- CSS  -->
  <link href="dist/page/css/login.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body background=img/bgts.jpg">
  <div class="container">
    <div class="card card-container">
      <img id="profile-img" class="profile-img-card" src="img/logo_fac_ts.jpg" style="height: 90px;" />
      <p id="profile-name" class="profile-name-card"></p>
      <form method="post" accept-charset="utf-8" action="login.php" name="loginform" autocomplete="off" role="form" class="form-signin">
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
        <span id="reauth-email" class="reauth-email"></span>
        <input onkeypress="return caracteres(event)" onblur="this.value=this.value.toUpperCase();" class="form-control" placeholder="Usuario" name="user_name" type="text" value="" autofocus="" required>
        <input class="form-control" placeholder="Contraseña" name="user_password" type="password" value="" autocomplete="off" required>
        <button type="submit" class="btn btn-lg btn-success btn-block btn-signin" name="login" id="submit">Iniciar Sesión</button>
      </form><!-- /form -->
    </div><!-- /card-container -->
  </div><!-- /container -->
  <?php
include "footer.php";
    ?>
</body>

</html>
<?php
} ?>