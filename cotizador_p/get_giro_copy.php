<?php
require 'config/conexion2.php';

// Número de registros recuperados
$numberofrecords = 5;

if(!isset($_POST['searchTerm'])){

// Obtener registros a tarves de la consulta SQL
$stmt = $db->prepare('SELECT * FROM gir_giro ORDER BY gir_nombre LIMIT :limit');
$stmt->bindValue(':limit', (int)$numberofrecords, PDO::PARAM_INT);
$stmt->execute();
$lista_giro = $stmt->fetchAll(PDO::FETCH_ASSOC);

}else{

$search = $_POST['searchTerm'];// Search text

// Mostrar resultados
$stmt = $db->prepare('SELECT * FROM gir_giro WHERE gir_nombre like :gir_nombre ORDER BY gir_nombre LIMIT :limit');
$stmt->bindValue(':gir_nombre', '%'.$search.'%', PDO::PARAM_STR);
$stmt->bindValue(':limit', (int)$numberofrecords, PDO::PARAM_INT);
$stmt->execute();
//Variable en array para ser procesado en el ciclo foreach
$lista_giro = $stmt->fetchAll(PDO::FETCH_ASSOC);

}

$response = array();


foreach($lista_giro as $pro){
$response[] = array(
"id" => $pro['gir_id'],
"text" => $pro['gir_nombre']
);
}

echo json_encode($response);
exit();
?>