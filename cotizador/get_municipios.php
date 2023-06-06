<?php
if(isset($_POST['id'])):
	require_once "config/conexion2.php";
	$user = new CodeaDB();
	$u    = $user->buscar("municipios", "mun_id_dep=" . $_POST['id']);
	$html = [];
	foreach ($u as $value)
		$html[] = ["id" => $value['mun_id'], "nombre" => $value['mun_nombre']];
	die(json_encode($html));
endif;
if(isset($_POST['id2'])):
	require_once "config/conexion2.php";
	$user = new CodeaDB();
	$u    = $user->buscar("municipios", "mun_id=" . $_POST['id2']);
	$html = [];
	foreach ($u as $value)
		$html[] = ["id" => $value['mun_id'], "nombre" => $value['mun_nombre']];
	die(json_encode($html));
endif;

?>