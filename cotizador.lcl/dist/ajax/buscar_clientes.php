<?php
include 'is_logged.php'; //Archivo verifica que el usario que intenta acceder a la URL esta logueado
/* Connect To Database*/
require_once "../config/db.php"; //Contiene las variables de configuracion para conectar a la base de datos
require_once "../config/conexion.php"; //Contiene funcion que conecta a la base de datos



$action = (isset($_REQUEST['action']) && $_REQUEST['action'] != null) ? $_REQUEST['action'] : '';
if (isset($_GET['id'])) {
    $id_cliente = intval($_GET['id']);
    $query = mysqli_query($con, "select * from facturas where id_cli='" . $id_cliente . "'");
    $count = mysqli_num_rows($query);
    if ($count == 0) {
        if ($delete1 = mysqli_query($con, "DELETE FROM clientes WHERE id_cli='" . $id_cliente . "'")) {
            ?>
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Aviso!</strong> Datos eliminados exitosamente.
			</div>
			<?php
        } else {
            ?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> Lo siento algo ha salido mal intenta nuevamente.
			</div>
			<?php
        }
    } else {
        ?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> No se pudo eliminar éste  cliente. Existen facturas vinculadas a éste producto.
			</div>
			<?php
    }
}
if ($action == 'ajax') {
    // escaping, additionally removing everything that could be (html/javascript-) code
    $q = mysqli_real_escape_string($con, (strip_tags($_REQUEST['q'], ENT_QUOTES)));
    $aColumns = array('nombre_cli','dui_cli','tel_cli'); //Columnas de busqueda
    $sTable = "clientes";
    $sWhere = " ";
    if ($_GET['q'] != "") {
        $sWhere = " WHERE (";
        for ($i = 0; $i < count($aColumns); $i++) {
            $sWhere .= $aColumns[$i] . " LIKE '%" . $q . "%' OR ";
        }
        $sWhere = substr_replace($sWhere, "", -3);
        $sWhere .= ')';
    }
    $sWhere .= " order by nombre_cli";
    include 'pagination.php'; //include pagination file
    //pagination variables
    $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page'])) ? $_REQUEST['page'] : 1;
    $per_page = 10; //how much records you want to show
    $adjacents = 4; //gap between pages after number of adjacents
    $offset = ($page - 1) * $per_page;
    //Count the total number of row in your table*/
    $count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
    $row = mysqli_fetch_array($count_query);
    $numrows = $row['numrows'];
    $total_pages = ceil($numrows / $per_page);
    $reload = './clientes.php';
    //main query to fetch the data
    $sql = "SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
    $query = mysqli_query($con, $sql);
    //loop through fetched data
    if ($numrows > 0) {
        ?>
			<div class="table-responsive">
			  <table class="table table-hover table-bordered">
				<tr  class="bg-secondary">
					<th>ID</th>
					<th>DUI</th>
          <th>NRC</th>
					<th>NOMBRE</th>
          <th>TELEFONO</th>
          <th>CONTACTO</th>
					<th>AGREGADO</th>
					<th class='text-right'>ACCIONES</th>
				</tr>

				<?php
        while ($row = mysqli_fetch_array($query)) {
            $id_cliente = $row['id_cli'];
            $dui_cliente = $row['dui_cli'];
            $nombre_cliente = $row['nombre_cli'];
            $tipo_cliente = $row['tipo_cli'];
            $muni_cliente = $row['municipio_cli'];
            $depto_cliente = $row['depto_cli'];
            $dir_cliente = $row['dir_cli'];
            $tel_cliente = $row['tel_cli'];
            $email_cliente = $row['correo_cli'];
            $giro_cliente = $row['giro_cli'];
              $comercio_cliente   = $row['comercio_cli'];
            $nrc_cliente = $row['nrc_cli'];
            $nit_cliente = $row['nit_cli'];
            $status_cliente = $row['estado_cli'];
            if ($status_cliente == 'A') {$estado = "ACTIVO";} else { $estado = "INACTIVO";}
            $fecha_reg_cliente = date('d/m/Y', strtotime($row['fecha_reg_cli']));
            $_SESSION['idDepto']=$row['municipio_cli'];
          ?>

          <input type="hidden" value="<?php echo $dui_cliente; ?>" id="dui_cli_<?php echo $id_cliente; ?>">
					<input type="hidden" value="<?php echo $nombre_cliente; ?>" id="nombre_cli_<?php echo $id_cliente; ?>">
          <input type="hidden" value="<?php echo $tipo_cliente; ?>" id="tipo_cli_<?php echo $id_cliente; ?>">
					<input type="hidden" value="<?php echo $muni_cliente; ?>" id="mun_cli_<?php echo $id_cliente; ?>">
					<input type="hidden" value="<?php echo $depto_cliente; ?>" id="depto_cli_<?php echo $id_cliente; ?>">
					<input type="hidden" value="<?php echo $dir_cliente; ?>" id="dir_cli_<?php echo $id_cliente; ?>">
					<input type="hidden" value="<?php echo $tel_cliente; ?>" id="tel_cli_<?php echo $id_cliente; ?>">
          <input type="hidden" value="<?php echo $email_cliente; ?>" id="correo_cli_<?php echo $id_cliente; ?>">
          <input type="hidden" value="<?php echo $comercio_cliente; ?>" id="comercio_cli_<?php echo $id_cliente; ?>">
          <input type="hidden" value="<?php echo $nrc_cliente; ?>" id="nrc_cli_<?php echo $id_cliente; ?>">
          <input type="hidden" value="<?php echo $giro_cliente; ?>" id="giro_cli_<?php echo $id_cliente; ?>">
          <input type="hidden" value="<?php echo $status_cliente; ?>" id="estado_cli_<?php echo $id_cliente; ?>">
          <input type="hidden" value="<?php echo $nit_cliente; ?>" id="nit_cli_<?php echo $id_cliente; ?>">

					<tr>
						<td><?php echo $id_cliente.".-".$_SESSION['idDepto']; ?></td>
						<td ><?php echo $dui_cliente; ?></td>
						<td><?php echo $nrc_cliente; ?></td>
						<td><?php echo $nombre_cliente; ?></td>
						<td><?php echo $tel_cliente; ?></td>
            <td><a href="#" class="btn btn-outline-primary btn-rounded" role="button" id="button" aria-disabled="false" title='Editar cliente' onclick="obtener_datos('<?php echo $id_cliente; ?>');" data-bs-toggle="modal" data-bs-target="#edit"><i class="fas fa-user-plus"></i></a></td>
            <td><?php echo $fecha_reg_cliente; ?></td>
					<td ><span class="pull-right">
					<a href="#" class="btn btn-outline-primary btn-rounded" role="button" aria-disabled="false" title='Editar cliente' onclick="obtener_datos('<?php echo $id_cliente; ?>');" data-bs-toggle="modal" data-bs-target="#editCliente"><i class="fas fa-edit fa-lg"></i></a>

					<?php //if ($_SESSION['user_level'] == 1 OR $_SESSION['user_level'] == 11) {?>
					<a href="#" class="btn btn-outline-danger btn-rounded" role="button" aria-disabled="false" title='Borrar cliente' onclick="eliminar('<?php echo $id_cliente; ?>')"><i class="fas fa-trash fa-lg"></i> </a>
				<?php // }?>
					</span></td>
					</tr>
					<?php
        }
        ?>
				<tr>
					<td colspan=7><span class="d-flex justify-content-start">
					<?php
        echo paginate($reload, $page, $total_pages, $adjacents);
        ?></span>
    <span class="pull-left totalreg">
						<?php echo 'TOTAL CLIENTES: ' . $numrows; ?>
					</span></td>
				</tr>
			  </table>
			</div>
			<?php
    }
}
?>