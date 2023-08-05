<?php
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['mod_id_cli'])) {
           $errors[] = "ID vacío";
        }else if (empty($_POST['mod_nombre_cont'])) {
           $errors[] = "Nombre vacío";
        }  else if (empty($_POST['mod_tel_cont'])){
			$errors[] = "Numero de telefono vacio";
		}  else if (
			!empty($_POST['mod_id_cli']) &&
			!empty($_POST['mod_nombre_cont']) &&
			!empty($_POST['mod_tel_cont']) 
		)
		{
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id_cli=intval($_POST['mod_id_cli']);
		$nombre_cont=mysqli_real_escape_string($con,(strip_tags($_POST["mod_nombre_cont"],ENT_QUOTES)));
		$tel_cont=mysqli_real_escape_string($con,(strip_tags($_POST["mod_tel_cont"],ENT_QUOTES)));
		$email_cont=mysqli_real_escape_string($con,(strip_tags($_POST["mod_email_cont"],ENT_QUOTES)));
		
		$sql="INSERT INTO contacto (id_cli_cont, nombre_cont, tel_cont, correo_cont) VALUES ('$id_cli','$nombre_cont','$tel_cont','$email_cont')";
		$query_new_cont = mysqli_query($con,$sql);
			if ($query_new_cont){
				$messages[] = "ok";
			} else{
				$errors []= "error en la base".mysqli_error($con);
			}
		} else {
			$errors []= "error desconocido";
		}
		
		if (isset($errors)){
			
			
						foreach ($errors as $error) {
								echo $error;
							}
						
			}
			if (isset($messages)){
				
				
							foreach ($messages as $message) {
									echo $message;
								}
							
			}

?>