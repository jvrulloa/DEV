
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
    <title>Perfil de empresa - Cotizador Web</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="assets/css/colors/blue.css" id="theme" rel="stylesheet">
	<link rel="icon" href="assets/images/cart_icon2.png">
	 <!--alerts CSS -->
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"><link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">
</head>

<body class="fix-header card-no-border ">
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
                        <h3 class="text-themecolor mb-0 mt-0">Configurar datos de la empresa</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item ">Configuración</li>
							<li class="breadcrumb-item active">Configurar datos de la empresa</li>
                        </ol>
                    </div>
					
					 
                    
                </div>
				
				
				
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
				
								<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Configuración</h4>
								
																	

									
							<form  role="form" enctype="multipart/form-data" method="post" >	
                              <div class="row">
								<div class="col-xs-12 col-md-6 form-group">
									<label>Nombre o Razón Social</label>
									<input type="text" name="nombre" id="nombre"  class="form-control" maxlength="150" value="SISTEMAS WEB " required>
								</div>
								<div class="col-xs-12 col-md-6 form-group">
									<label>Actividad económica</label>
									<input class="form-control" name="giro" id="giro" type="text" value="Desarrollo de sistemas web a la medida" maxlength="150" required/>
								</div>
							</div>
							
							<div class="row">
								<div class="col-xs-12 col-md-6 form-group">
									<label>Propietario</label>
									<input class="form-control" name="propietario" id="propietario"  type="text" value="Obed Alvarado" maxlength="60" required/>
								</div>
								<div class="col-xs-12 col-md-6 form-group">
									<label>Nº de Registro fiscal</label>
									<input class="form-control" name="nrc" id="nrc" type="text" value="123456-2" maxlength="15" required/>
								</div>
							</div>
							
							<div class="row">
								<div class="col-xs-12 col-md-6 form-group">
									<label>Dirección</label>
									<textarea class="form-control" name="direccion" id="direccion" maxlength='255' required>12 calle poniente #301, San Miguel.</textarea>
								</div>
								
								<div class="col-xs-12 col-md-6 form-group">
									<label>Selecciona moneda</label>
									<select name="moneda" id="moneda" class='form-control'>
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
							
							<div class="row">
								<div class="col-xs-12 col-md-6 form-group">
									<label>Teléfono</label>
									<input class="form-control" name="telefono" id="telefono" type="text" value="+503 7095 1330" maxlength='30' required/>
									
									<label>Correo electrónico</label>
									<input class="form-control" name="email" id="email" type="email" value="info@obedalvarado.pw" maxlength='64' required/>
								</div>
								
								<div class="col-xs-12 col-md-6 form-group">
									<label style="display:block;">Logo</label>
									<input type="file" id="input-file-now-custom-1" name="imagefile" class="dropify" data-default-file="assets/images/logo/logos3.jpg" />
									
								</div>
								
							</div>
							
							<div class="row">
								
								
							</div>
							
							<div class="row">
								<div class="col-xs-12 col-md-6 form-group">
									
								</div>
									
								<div class="col-xs-12 col-md-6 form-group">
									
									<button type="submit" class="btn btn-primary" name="guardar">Guardar datos</button>
								</div>
															</div>
							
					</form>		
							
								
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
	<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>	<script src="assets/plugins/dropify/dist/js/dropify.min.js"></script>
	<script>
    $(document).ready(function() {
        // Basic
       ;
		
		
		$('.dropify').dropify({
			messages: {
				'default': 'Arrastrar y soltar una imagen o click aquí.',
				'replace': 'Arrastra y suelta o haz clic para reemplazar.',
				'remove':  'Borrar',
				'error':   'Vaya, algo mal pasó.'
			}
		});

       
        
    });
    </script>
	
 </body>
</html>
