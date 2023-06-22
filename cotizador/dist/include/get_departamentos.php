<?php

/* include '../ajax/is_logged.php'; //Archivo verifica que el usario que intenta acceder a la URL esta logueado
/* Connect To Database
require_once "../config/db.php"; //Contiene las variables de configuracion para conectar a la base de datos
require_once "../config/conexion.php"; //Contiene funcion que conecta a la base de datos */
$conexion = mysqli_connect("localhost","root",'',"cotizador");

$query = $conexion->query("SELECT * FROM departamentos");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['dep_id']. '">' . $row['dep_nombre'] . '</option>' . "\n";
}
