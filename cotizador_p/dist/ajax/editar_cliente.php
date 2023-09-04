<?php
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['mod_id'])) {
           $errors[] = "ID vacío";
        }else if (empty($_POST['mod_nombre_cliente'])) {
           $errors[] = "Nombre vacío";
        }  else if ($_POST['mod_estado_cliente']==""){
			$errors[] = "Selecciona el estado del cliente";
		}  else if (
			!empty($_POST['mod_id']) &&
			!empty($_POST['mod_nombre_cliente']) &&
			$_POST['mod_estado_cliente']!="" 
		)
		{
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id_cli=intval($_POST['mod_id']);
		$nombre_cli=mysqli_real_escape_string($con,(strip_tags($_POST["mod_nombre_cliente"],ENT_QUOTES)));
		$tipo_cli=mysqli_real_escape_string($con,(strip_tags($_POST["mod_tipo_cliente"],ENT_QUOTES)));
		$dui_cli=mysqli_real_escape_string($con,(strip_tags($_POST["mod_dui_cliente"],ENT_QUOTES)));
		$nit_cli=mysqli_real_escape_string($con,(strip_tags($_POST["mod_nit"],ENT_QUOTES)));
		$comercio_cli=mysqli_real_escape_string($con,(strip_tags($_POST["mod_nomcom_cliente"],ENT_QUOTES)));
		$nrc_cli=mysqli_real_escape_string($con,(strip_tags($_POST["mod_registro"],ENT_QUOTES)));
		$tel_cli=mysqli_real_escape_string($con,(strip_tags($_POST["mod_tel"],ENT_QUOTES)));
		$giro_cli=mysqli_real_escape_string($con,(strip_tags($_POST["mod_giro"],ENT_QUOTES)));
		$municipio_cli=mysqli_real_escape_string($con,(strip_tags($_POST["mod_muni"],ENT_QUOTES)));
		$depto_cli=mysqli_real_escape_string($con,(strip_tags($_POST["mod_depto"],ENT_QUOTES)));
		$dir_cli=mysqli_real_escape_string($con,(strip_tags($_POST["mod_direccion"],ENT_QUOTES)));
		$estado_cli=intval($_POST['mod_estado_cliente']);
		$correo_cli=mysqli_real_escape_string($con,(strip_tags($_POST["mod_email"],ENT_QUOTES)));
		
		$sql="UPDATE clientes SET nombre_cli='".$nombre_cli."',tipo_cli='".$tipo_cli."',dui_cli='".$dui_cli."',nit_cli='".$nit_cli."',comercio_cli='".$comercio_cli."',nrc_cli='".$nrc_cli."',tel_cli='".$tel_cli."',giro_cli='".$giro_cli."',municipio_cli='".$municipio_cli."',depto_cli='".$depto_cli."',dir_cli='".$dir_cli."', estado_cli='".$estado_cli."', correo_cli='".$correo_cli."' WHERE id_cli='".$id_cli."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
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