<?php
	
	 require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	 require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$id_estado = $_POST['id_estado'];
	
	$queryM =mysqli_query($con, "SELECT  s.idSubCat, s.nameSubCat, csi.idCat FROM catsubitem csi INNER JOIN  subcategory s ON csi.idSubCat=s.idSubCat 	WHERE csi.idCat='$id_estado' group by csi.idSubCat asc");
	
	
	$html= "<option value=''>Select Subcat</option>";
	
	while($rowM = mysqli_fetch_array($queryM))
	{
		$html.= "<option value='".$rowM['idSubCat']."'>".$rowM['nameSubCat']."</option>";
	}
	
	echo $html;
?>		