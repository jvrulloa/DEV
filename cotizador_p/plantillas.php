
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
    <title>Plantillas - Cotizador Web</title>
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
                        <h3 class="text-themecolor mb-0 mt-0">Configurar plantillas</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item ">Configuración</li>
							<li class="breadcrumb-item active">Plantillas</li>
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
                                <h4 class="card-title">Plantillas</h4>
							<div class='row'>	
							<h2>Selecciona una plantilla por defecto</h2>
							<div id='resultados_ajax' class='col-md-12'></div>
							
																	
							<div class="col-xs-6 col-md-4 text-center">
								<a href="#" class="thumbnail" data-toggle="modal" data-target="#imagemodal" data-url="assets/images/preview/1.png" data-title="Default">
								  <img src="assets/images/preview/1.png" alt="..." class='img-responsive'>
								</a>
								<hr>
								<input type="radio" name="id_plantilla" id="id_plantilla" value="1"  > Default								<hr>
							  </div>
																	
							<div class="col-xs-6 col-md-4 text-center">
								<a href="#" class="thumbnail" data-toggle="modal" data-target="#imagemodal" data-url="assets/images/preview/2.png" data-title="Negocios">
								  <img src="assets/images/preview/2.png" alt="..." class='img-responsive'>
								</a>
								<hr>
								<input type="radio" name="id_plantilla" id="id_plantilla" value="2"  > Negocios								<hr>
							  </div>
																	
							<div class="col-xs-6 col-md-4 text-center">
								<a href="#" class="thumbnail" data-toggle="modal" data-target="#imagemodal" data-url="assets/images/preview/3.png" data-title="Alizarin">
								  <img src="assets/images/preview/3.png" alt="..." class='img-responsive'>
								</a>
								<hr>
								<input type="radio" name="id_plantilla" id="id_plantilla" value="3"  > Alizarin								<hr>
							  </div>
																	
							<div class="col-xs-6 col-md-4 text-center">
								<a href="#" class="thumbnail" data-toggle="modal" data-target="#imagemodal" data-url="assets/images/preview/4.png" data-title="Color Sea">
								  <img src="assets/images/preview/4.png" alt="..." class='img-responsive'>
								</a>
								<hr>
								<input type="radio" name="id_plantilla" id="id_plantilla" value="4"  > Color Sea								<hr>
							  </div>
							<div class='clearfix'></div>										
							<div class="col-xs-6 col-md-4 text-center">
								<a href="#" class="thumbnail" data-toggle="modal" data-target="#imagemodal" data-url="assets/images/preview/5.png" data-title="Simple">
								  <img src="assets/images/preview/5.png" alt="..." class='img-responsive'>
								</a>
								<hr>
								<input type="radio" name="id_plantilla" id="id_plantilla" value="5"  > Simple								<hr>
							  </div>
																	
							<div class="col-xs-6 col-md-4 text-center">
								<a href="#" class="thumbnail" data-toggle="modal" data-target="#imagemodal" data-url="assets/images/preview/6.png" data-title="Servicios">
								  <img src="assets/images/preview/6.png" alt="..." class='img-responsive'>
								</a>
								<hr>
								<input type="radio" name="id_plantilla" id="id_plantilla" value="6" checked > Servicios								<hr>
							  </div>
								

								<div class="col-md-12 text-center">
								
									<button type="button" class="btn btn-success" onclick="updateProfile();"><i class="fa fa-refresh"></i> Actualizar datos</button>
									
								</div>	
							</div>
							
				
								
                            </div>
                        </div>
                    </div>
                </div>
								

				<!-- Creates the bootstrap modal where the image will appear -->
				<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						
						<h4 class="modal-title" id="myModalLabel">Image preview</h4>
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					  </div>
					  <div class="modal-body">
						<img src="" id="imagepreview" style="width: 100%" >
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
	<script>
		function updateProfile(){
			id_plantilla =$('#id_plantilla:checked').val();
			var parametros = {"id_plantilla":id_plantilla };
			 $.ajax({
				type: "POST",
				url: "ajax/editar_plantilla.php",
				data: parametros,
				 beforeSend: function(objeto){
					$("#resultados_ajax").html("Mensaje: Cargando...");
				  },
				success: function(datos){
				$("#resultados_ajax").html(datos);
			  }
			});
		}
		$('#imagemodal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var url = button.data('url')
		  var title = button.data('title')
		  var modal = $(this)
		  modal.find('.modal-title').text(title)
		  $('#imagepreview').attr('src', url);
		})
	</script>
	
 </body>
</html>
