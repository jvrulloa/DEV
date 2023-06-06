
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Editar cotización - Cotizador Web</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="assets/css/colors/blue.css" id="theme" rel="stylesheet">
	<link rel="icon" href="assets/images/cart_icon2.png">
	 <!--alerts CSS -->
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
		        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b>
                            <!-- Light Logo icon -->
                            <img src="assets/images/cart_icon.png" alt="homepage" class="light-logo" style="width:34px" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         
                         <!-- Light Logo text -->  
						<span class='text-white'> Cotizador <b>Web</b></span>						 
                         
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        
                       
    
                    </ul>
                   
                    <ul class="navbar-nav my-lg-0">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fa fa-user'></i> demo</a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li> 
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="assets/images/users/avatar.png" alt="user"></div>
                                            <div class="u-text">
                                                <h4>demo</h4>
                                                <p class="text-muted">info@obedalvarado.com</p></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="usuarios.php?profile=1"><i class="ti-user"></i> Mi Perfil</a></li>
                                    <li><a href="cotizaciones.php?type=1"><i class="ti-wallet"></i> Mis cotizaciones</a></li>
                                    
                                    <li role="separator" class="divider"></li>
                                   
                                    <li><a href="login.php?logout"><i class="fa fa-power-off"></i> Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
		            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a class="has-arrow" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                            
                        </li>
                        <li>
                            <a class="has-arrow " href="cotizaciones.php" aria-expanded="false"><i class="mdi mdi-shopping"></i><span class="hide-menu">Cotizaciones</span></a>
                           
                        </li>

						<li>
                            <a class="has-arrow " href="clientes.php" aria-expanded="false"><i class="mdi mdi-contact-mail"></i><span class="hide-menu">Clientes</span></a>
                            
                        </li>

						<li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-barcode"></i><span class="hide-menu">Catálogo</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="productos.php">Productos</a></li>
								<li><a href="fabricantes.php">Fabricantes</a></li>
                               
                            </ul>
                        </li>
						
						<li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-account-settings-variant"></i><span class="hide-menu">Administrar accesos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="usuarios.php">Usuarios</a></li>
								<li><a href="group_list.php">Roles de usuario</a></li>
                               
                            </ul>
                        </li>
						
						<li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Configuración</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="empresa.php">Perfil de la empresa</a></li>
								<li><a href="monedas.php">Monedas</a></li>
								<li><a href="impuestos.php">Impuestos</a></li>
								<li><a href="plantillas.php">Plantillas</a></li>
                            </ul>
                        </li>
   
                      
                        
                        
                        
                       
                       
                      
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Cotizaciones</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
							<li class="breadcrumb-item ">Cotizaciones</li>
							<li class="breadcrumb-item active">Editar</li>
                        </ol>
                    </div>
					
					
                    
                </div>
				
				
				
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
							<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-lg" role="document" style=" max-width: 80% !important;" >
				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Buscar productos</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					
				  </div>
				  <div class="modal-body">
					<form class="form-horizontal">
					  <div class="row">
						


						<div class="col-sm-8">
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="q" placeholder="Buscar productos" onkeyup="load(1)">
						  <div class="input-group-prepend">
							
							<button type="button" class="btn btn-outline-secondary" onclick="load(1)"><span class='fa fa-search'></span> Buscar</button>
						  </div>
						  
						</div>
						
						
						  
						</div>
						
						
					  </div>
					</form>
					<div id="loader" style="position: absolute;	text-align: center;	top: 55px;	width: 100%;display:none;"></div><!-- Carga gif animado -->
					<div class="outer_div" ></div><!-- Datos ajax Final -->
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					
				  </div>
				</div>
			  </div>
			</div><form class="form-horizontal" method="post" id="editar_item" name="editar_item">
	<!-- Modal -->
	<div class="modal fade " id="editModalItem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title" id="myModalLabel"><i class='fa fa-edit'></i> Editar </h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			
		  </div>
		  <div class="modal-body">
			<div class="row">
				<div class="col-md-8">
					<label for="codigo_item" class="control-label">Código</label>
					<input type="text" class="form-control" id="codigo_item" name="codigo_item" placeholder="" disabled required>
					<input type="hidden" class="form-control" id="id_tmp" name="id_tmp" >
				</div>
				<div class="col-md-4">
					<label for="cantidad_item" class="control-label">Cantidad</label>
					<input type="text" class="form-control" id="cantidad_item" name="cantidad_item" placeholder="" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label for="descripcion_item" class="control-label">Descripción</label>
					<input type="text" class="form-control" name="descripcion_item" id="descripcion_item" disabled>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="precio_item" class="control-label">Precio</label>
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-usd"></i></div>
						<input type="text" class="form-control" name="precio_item" id="precio_item" required>
					</div>	
				</div>
				<div class="col-md-6">
					<label for="descuento_item" class="control-label">Descuento</label>
					<div class="input-group  mb-3 ">
						  <div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-percent"></i></span>
							
						  </div>
						  <input type="text" class="form-control" name="descuento_item" id="descuento_item" >
						</div>
						
						
				</div>

			</div>			
		</div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary">Actualizar datos</button>
		  </div>
		</div>
	  </div>
	</div>
</form>									
				<div class="row">
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                            <h3><b>COTIZACIÓN</b> <span class="float-right">#872</span></h3>
                            <hr>
							<div class="row">
								<div class="col-md-3">
									<label>Cliente</label>	
								  <input type="text" class="form-control" id="nombre_cliente" placeholder="" required value="Javier Ortiz">
								  <input id="id_cliente" type='hidden' value="1636">	
								</div>
								
								<div class="col-md-3">
									<label>Atención</label>	
									
									<select class='form-control' id="atencion" name="atencion" onchange="update_cotizacion(8,this.value);">
										<option value="">Selecciona</option>
																				
									</select>
								
								</div>
								<div class="col-md-3">
									<label>Teléfono de contacto</label>	
									<input type="text" class="form-control " id="tel1" placeholder="" value="" readonly>	
									
								</div>
								
								<div class="col-md-3">
									<label>E-mail de contacto</label>	
									<input type="text" class="form-control " id="email_contact" placeholder="" value="" readonly>
									
								</div>
							</div>
							
                            <div class="row">
								<div class="col-md-4">
									<label>Condiciones de pago</label>
									<input type="text" class="form-control" id="condiciones" placeholder="Condiciones de pago" value="Contado" onblur="update_cotizacion(2,this.value);">
								</div>
								<div class="col-md-4">
									<label>Validéz de la oferta</label>
									<input type="text" class="form-control" id="validez" placeholder="Validéz de la oferta" value="5" onblur="update_cotizacion(3,this.value);">
								</div>
								<div class="col-md-4">
									<label>Tiempo de entrega</label>
									<input type="text" class="form-control" id="entrega" placeholder="Tiempo de entrega" value="5" onblur="update_cotizacion(4,this.value);">
								</div>
							
							</div>

							<div class="row">
								<div class="col-md-5">
									<label>Nota</label>
									<input type="text" class="form-control " id="notas" placeholder="Nota" maxlength='255' value="" onblur="update_cotizacion(5,this.value);">
								</div>
								
								<div class="col-md-2">
									<label>Plantilla</label>
																		<select name="id_plantilla" id="id_plantilla" class='form-control' onchange="update_cotizacion(9,this.value);">
									<option value='1' >Default</option><option value='2' >Negocios</option><option value='3' >Alizarin</option><option value='4' >Color Sea</option><option value='5' >Simple</option><option value='6' selected>Servicios</option>									</select>									
								</div>
								
								<div class="col-md-2">
									<label>Estado</label>
									<select class="form-control " id="status" required onchange="update_cotizacion(6,this.value);">
										<option value='0' selected>Pendiente</option>
										<option value='1' >Aceptada</option>
										<option value='2' >Rechazada</option>
									</select>
								</div>
								
								<div class="col-md-3">
									<label>Moneda</label>
									<select name="moneda" id="moneda" class='form-control input-sm' onchange="update_cotizacion(7,this.value);">
																						<option value="1" selected>soles</option>
																								<option value="2" >Pesos Mexicanos</option>
																								<option value="3" >Euro</option>
																								<option value="4" >Quetzales</option>
																								<option value="5" >Real</option>
																								<option value="6" >lempira</option>
																								<option value="7" >Dolar</option>
																								<option value="8" >Peso Chileno</option>
																								<option value="9" >MONEDA</option>
																								<option value="10" >Peso Colombiano</option>
																								<option value="11" >Quetzal</option>
																								<option value="12" >Bolívares</option>
																								<option value="13" >Pesos Mexicanos</option>
																								<option value="14" >Sol Peruano</option>
																								<option value="15" >Pesos uruguayos</option>
																								<option value="16" >asd</option>
																								<option value="17" >Peso Argentino</option>
																								<option value="18" >Bolivianos</option>
																								<option value="19" >Cordoba</option>
																								<option value="20" >Guaraníes</option>
																								<option value="21" >Dollar Canadian</option>
																								<option value="22" >Boliviano</option>
																								<option value="23" >Bolivianos</option>
																								<option value="24" >coin</option>
																								<option value="25" >Pesos Chileno</option>
																					</select>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-12">
									<div class="float-right">
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
										 <span class="fa fa-search"></span> Buscar productos
										</button>
										<button type="button" class="btn  btn-light" onclick="ver_cotizacion('1067');">
										  <span class="fa fa-print"></span> Imprimir
										</button>
									</div>	
								</div>
							</div>
							
							
							<div class="row">
								<div id="resultados"  class="col-md-12" style="margin-top:10px"></div><!-- Carga los datos ajax -->
							</div>
							
							
                        </div>
                    </div>
                </div>
								

				
               
				
				
				
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2015-2023 Cotizador web desarrollado por <a href='http://obedalvarado.com/' target='_blank'>obedalvarado.com</a>            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
	
		<script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/js/custom.min.js"></script>
	<!--Sweetalert plugin -->
	<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>	
    <script type="text/javascript" src="assets/js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="assets/js/editar_cotizacion.js"></script>
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	
 </body>
</html>
