<?php

	# conectare la base de datos
    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_connect_error());
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
    if (!$con->set_charset("utf8")) {
        printf("Error cargando el conjunto de caracteres utf8: %s\n", $con->error);
        exit();
    }
?>