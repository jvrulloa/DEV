<?php
//include("conexion.php");
$conn = new mysqli('localhost', 'root', 'P$M7', 'cotizador') or die(mysqli_connect_error());
$q = $_POST['q'];
$subcat = $conn->prepare("SELECT * FROM municipios	WHERE mun_id_dep='$q' ") or die(mysqli_connect_error());
echo '<option value = "">Selecciona un municipio  </option>';
if ($subcat->execute()) {
	$a_result = $subcat->get_result();
}
while ($row = $a_result->fetch_array()) {
	echo '<option value = "' . $row['mun_id_dep'] . '">' . $row['mun_nombre']. '</option>';
}
?>