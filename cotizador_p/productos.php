
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
    <title>Productos - Cotizador Web</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="assets/css/colors/blue.css" id="theme" rel="stylesheet">
	<link rel="icon" href="assets/images/cart_icon2.png">
	 <!--alerts CSS -->
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"><!-- summernotes CSS -->
<link href="assets/plugins/summernote/dist/summernote-bs4.css" rel="stylesheet" />
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
                        <h3 class="text-themecolor mb-0 mt-0">Productos</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item">Catálogo</li>
							<li class="breadcrumb-item active">Productos</li>
                        </ol>
                    </div>
					
					 <div class="col-md-6 col-4 align-self-center">
						
                        <button class="btn float-right  btn-success" data-toggle="modal" data-target="#addModalProduct"><i class="mdi mdi-plus-circle"></i> <span class='hidden-sm-down'>Nuevo</span></button>
                        <div class="dropdown float-right m-r-10 hidden-sm-down">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Importar datos </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;"> 
								
								<a class="dropdown-item" href="#importar_modal" data-toggle="modal"><i class="mdi mdi-file-excel"></i> Hoja de cálculo</a>
								<a class="dropdown-item" href="assets/template/formato_importacion_productos.xlsx" ><i class="mdi mdi-download"></i> Descargar formato</a>
								 
							</div>
                        </div>
                    </div>
                    
                </div>
				
				
				
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
					<!-- Modal -->
	<div class="modal fade " id="addModalProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo producto</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		 </div>
		  <div class="modal-body">
			
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
			
			<div class="row">
				<div class="col-md-6">
					<label for="codigo" class="control-label">Código</label>
					<input type="text" class="form-control" id="codigo" name="codigo" placeholder="" required>
				</div>
				<div class="col-md-6">
					<label for="modelo" class="control-label">Modelo</label>
					<input type="text" class="form-control" id="modelo" name="modelo" placeholder="" >
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label for="nombre" class="control-label">Nombre o descripción del producto</label>
					<textarea  id="nombre" name="nombre" class='form-control summernote' ></textarea >
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label for="fabricante" class="control-label">Fabricante</label>
					<select class="form-control" id="fabricante" name="fabricante">
					<option value="">-- Selecciona --</option>
											<option value="10">3M</option>
												<option value="391">a</option>
												<option value="392">a</option>
												<option value="393">a</option>
												<option value="390">aa</option>
												<option value="53">aaaa</option>
												<option value="287">ABG CONSTRUCCIONES METALICAS Y MONTAJES</option>
												<option value="353">ABG CONSTRUCCIONES METALICAS Y MONTAJES</option>
												<option value="100">Adam </option>
												<option value="317">adrian</option>
												<option value="255">Adrian benavente</option>
												<option value="322">Adrian benavente</option>
												<option value="328">Adrian benavente</option>
												<option value="329">Adrian benavente</option>
												<option value="333">Adrian benavente</option>
												<option value="334">Adrian benavente</option>
												<option value="335">Adrian benavente</option>
												<option value="339">Adrian benavente</option>
												<option value="340">Adrian benavente</option>
												<option value="355">Adrian benavente</option>
												<option value="198">Alejandra</option>
												<option value="205">Alejandra </option>
												<option value="206">Alejandra</option>
												<option value="65">Alejandro </option>
												<option value="19">Alicia</option>
												<option value="303">Alonso </option>
												<option value="324">Alonso</option>
												<option value="134">AmigoNuevo</option>
												<option value="136">AmigoNuevo</option>
												<option value="169">AmigoNuevo</option>
												<option value="115">Ana Quispe</option>
												<option value="118">Ana Quispe</option>
												<option value="170">Ana Quispe</option>
												<option value="73">ANGEL CORREA </option>
												<option value="20">Apple</option>
												<option value="257">apple sac</option>
												<option value="264">apple sac</option>
												<option value="172">armandohoyos</option>
												<option value="25">asdasd</option>
												<option value="91">Barja Estrada, Luis Diego</option>
												<option value="95">Barja Estrada, Luis Diego</option>
												<option value="99">Barja Estrada, Luis Diego</option>
												<option value="103">Barja Estrada, Luis Diego</option>
												<option value="109">Barja Estrada, Luis Diego</option>
												<option value="112">Barja Estrada, Luis Diego</option>
												<option value="186">Barja Estrada, Luis Diego</option>
												<option value="184">Barja Estrada, Luis Diego</option>
												<option value="395">bb</option>
												<option value="396">bb</option>
												<option value="397">bb</option>
												<option value="398">bb</option>
												<option value="399">bb</option>
												<option value="394">bbb</option>
												<option value="84">Bernardo</option>
												<option value="85">Bernardo</option>
												<option value="277">Bryan</option>
												<option value="310">Bryan</option>
												<option value="313">Bryan</option>
												<option value="74">CALERS</option>
												<option value="240">carlos davifd</option>
												<option value="87">Carpenters</option>
												<option value="101">Casaverde Diego</option>
												<option value="404">CAT</option>
												<option value="327">Cesar</option>
												<option value="344">Cesar</option>
												<option value="346">Cesar</option>
												<option value="366">Cesar</option>
												<option value="372">Cesar</option>
												<option value="244">Cesar Alvaro UPC</option>
												<option value="8">Chile Empresas</option>
												<option value="51">Dahua</option>
												<option value="7">Daker</option>
												<option value="102">dasadas</option>
												<option value="106">dasdas</option>
												<option value="384">dererer</option>
												<option value="49">diegooooooo</option>
												<option value="56">Drogueria</option>
												<option value="385">dssddsds</option>
												<option value="66">eeee</option>
												<option value="68">Enzo</option>
												<option value="386">erer</option>
												<option value="29">Este texto se mueve de abajo hacia arriba</option>
												<option value="31">Este texto se mueve de abajo hacia arriba</option>
												<option value="32">Este texto se mueve de abajo hacia arriba</option>
												<option value="33">Este texto se mueve de abajo hacia arriba</option>
												<option value="34">Este texto se mueve de abajo hacia arriba</option>
												<option value="35">Este texto se mueve de abajo hacia arriba</option>
												<option value="36">Este texto se mueve de abajo hacia arriba</option>
												<option value="37">Este texto se mueve de abajo hacia arriba</option>
												<option value="38">Este texto se mueve de abajo hacia arriba</option>
												<option value="39">Este texto se mueve de abajo hacia arriba</option>
												<option value="40">Este texto se mueve de abajo hacia arriba</option>
												<option value="41">Este texto se mueve de abajo hacia arriba</option>
												<option value="42">Este texto se mueve de abajo hacia arriba</option>
												<option value="43">Este texto se mueve de abajo hacia arriba</option>
												<option value="44">Este texto se mueve de abajo hacia arriba</option>
												<option value="45">Este texto se mueve de abajo hacia arriba</option>
												<option value="364">estejonnel</option>
												<option value="180">Evelyn Janeth</option>
												<option value="181">Evelyn Janeth</option>
												<option value="12">Evolis</option>
												<option value="246">fabrica1</option>
												<option value="249">fabrica1</option>
												<option value="284">fabrica1</option>
												<option value="288">fabrica1</option>
												<option value="289">fabrica1</option>
												<option value="215">FABRICADOR</option>
												<option value="174">Fabricante</option>
												<option value="179">Fabricante</option>
												<option value="382">fabricante 123</option>
												<option value="383">fabricante 123</option>
												<option value="389">fabricante 123</option>
												<option value="213">Fabricante de autos</option>
												<option value="235">Fabricante Diseño</option>
												<option value="247">Fabricante Diseño</option>
												<option value="262">Fabricante Diseño</option>
												<option value="270">Fabricante Diseño</option>
												<option value="278">Fabricante Diseño</option>
												<option value="292">Fabricante Diseño</option>
												<option value="298">Fabricante Diseño</option>
												<option value="330">Fabricante Diseño</option>
												<option value="336">Fabricante Diseño</option>
												<option value="345">Fabricante Diseño</option>
												<option value="352">Fabricante Diseño</option>
												<option value="356">Fabricante Diseño</option>
												<option value="360">Fabricante Diseño</option>
												<option value="365">Fabricante Diseño</option>
												<option value="367">Fabricante Diseño</option>
												<option value="368">Fabricante Diseño</option>
												<option value="369">Fabricante Diseño</option>
												<option value="380">Fabricante Diseño</option>
												<option value="381">Fabricante Diseño</option>
												<option value="111">Fabricante-nuevo</option>
												<option value="113">Fabricante-nuevo</option>
												<option value="158">Fabricanteeeeeee</option>
												<option value="160">Fabricanteeeeeeee</option>
												<option value="167">Fabricanteeeeeeee</option>
												<option value="171">fabricantesc</option>
												<option value="173">fabricantesc</option>
												<option value="175">fabricantesfrancis</option>
												<option value="222">fasfa</option>
												<option value="225">fasfa</option>
												<option value="77">Giancarlo</option>
												<option value="133">Giancarlo</option>
												<option value="137">Giancarlo</option>
												<option value="168">Giancarlo</option>
												<option value="176">Giancarlo</option>
												<option value="71">GOODYEAR</option>
												<option value="218">Google Inc</option>
												<option value="220">HP</option>
												<option value="221">HP</option>
												<option value="228">HP</option>
												<option value="250">HP</option>
												<option value="258">HP</option>
												<option value="268">HP</option>
												<option value="242">HUANCAYORK</option>
												<option value="105">Huber </option>
												<option value="110">Huber</option>
												<option value="117">Huber</option>
												<option value="119">Huber</option>
												<option value="123">Huber</option>
												<option value="141">Huber</option>
												<option value="145">Huber</option>
												<option value="148">Huber</option>
												<option value="149">Huber</option>
												<option value="150">Huber</option>
												<option value="153">Huber</option>
												<option value="156">Huber</option>
												<option value="67">inlusac</option>
												<option value="69">Jarquinigor</option>
												<option value="132">Javier Ortiz</option>
												<option value="135">Javier Ortiz</option>
												<option value="378">jean carlos</option>
												<option value="379">jean carlos</option>
												<option value="373">Jeffrey</option>
												<option value="374">Jeffrey</option>
												<option value="375">Jeffrey</option>
												<option value="376">Jeffrey</option>
												<option value="125">Jeremy Alcala</option>
												<option value="128">Jeremy Alcala</option>
												<option value="143">Jeremy Alcala</option>
												<option value="192">Jeremy Alcala</option>
												<option value="193">Jeremy Alcala</option>
												<option value="79">Jess</option>
												<option value="80">Jess</option>
												<option value="81">jess</option>
												<option value="46">Jestereo</option>
												<option value="226">JoaoElFabricante</option>
												<option value="227">JoaoElFabricante</option>
												<option value="251">JoaoElFabricante</option>
												<option value="253">JoaoElFabricante</option>
												<option value="200">JoaoFabricante</option>
												<option value="204">JoaoFabricante</option>
												<option value="194">Jonnel</option>
												<option value="195">Jonnel</option>
												<option value="209">JORGE RAYAS</option>
												<option value="211">JORGE RAYAS</option>
												<option value="214">JORGE RAYAS</option>
												<option value="217">JORGE RAYAS</option>
												<option value="239">Jose</option>
												<option value="243">Jose</option>
												<option value="82">Joseph</option>
												<option value="302">Juan</option>
												<option value="305">Juan</option>
												<option value="357">Juan</option>
												<option value="359">Juan</option>
												<option value="362">Juan</option>
												<option value="159">Judith Orosco</option>
												<option value="219">Julian Huayta</option>
												<option value="223">Julian Huayta</option>
												<option value="245">Julian Huayta</option>
												<option value="259">Julian Huayta</option>
												<option value="265">Julian Huayta</option>
												<option value="276">Julian Huayta</option>
												<option value="280">Julian Huayta</option>
												<option value="283">Julian Huayta</option>
												<option value="285">Julian Huayta</option>
												<option value="290">Julian Huayta</option>
												<option value="295">Julian Huayta</option>
												<option value="301">Julian Huayta</option>
												<option value="304">Julian Huayta</option>
												<option value="306">Julian Huayta</option>
												<option value="320">Julian Huayta</option>
												<option value="321">Julian Huayta</option>
												<option value="323">Julian Huayta</option>
												<option value="343">Julian Huayta</option>
												<option value="83">Julito Market</option>
												<option value="3">la colina</option>
												<option value="4">la colina</option>
												<option value="197">Leandro</option>
												<option value="86">Leonardo Samaniego Fab</option>
												<option value="88">Leonardo Samaniego Fab</option>
												<option value="90">Leonardo Samaniego Fab</option>
												<option value="114">LeoSamFabricante</option>
												<option value="116">LeoSamFabricante</option>
												<option value="126">LeoSamTech-Fabricante</option>
												<option value="127">LeoSamTech-Fabricante</option>
												<option value="120">LeoTechSam-Fabricante</option>
												<option value="121">LeoTechSam-Fabricante</option>
												<option value="52">LFFF</option>
												<option value="269">LIMA SAC</option>
												<option value="272">LIMA SAC</option>
												<option value="274">LIMA SAC</option>
												<option value="275">LIMA SAC</option>
												<option value="261">LIMAS SAC</option>
												<option value="266">LIMAS SAC</option>
												<option value="232">Lionel</option>
												<option value="300">Lionel</option>
												<option value="331">Lionel</option>
												<option value="338">Lionel</option>
												<option value="196">Liza</option>
												<option value="233">Logitech</option>
												<option value="267">Logitech</option>
												<option value="279">Logitech</option>
												<option value="281">Logitech</option>
												<option value="282">Logitech</option>
												<option value="286">Logitech</option>
												<option value="332">Logitech</option>
												<option value="76">LolaMarcela</option>
												<option value="151">Lu S.a.</option>
												<option value="354">Luis</option>
												<option value="207">Luis Angel</option>
												<option value="208">Luis Angel</option>
												<option value="210">Luis Angel</option>
												<option value="212">Luis Angel</option>
												<option value="231">Luis Angel</option>
												<option value="234">Luis Angel</option>
												<option value="237">Luis Angel</option>
												<option value="238">Luis Angel</option>
												<option value="241">Luis Angel</option>
												<option value="248">Luis Angel</option>
												<option value="252">Luis Angel</option>
												<option value="260">Luis Angel</option>
												<option value="263">Luis Angel</option>
												<option value="271">Luis Angel</option>
												<option value="273">Luis Angel</option>
												<option value="216">Luis Quichca</option>
												<option value="230">Luis Quichca</option>
												<option value="236">Luis Quichca</option>
												<option value="291">Luis Quichca</option>
												<option value="371">Luis Quichca</option>
												<option value="75">LUISAFERNANDA</option>
												<option value="93">María Jiménez</option>
												<option value="96">María Jiménez</option>
												<option value="108">María Jiménez</option>
												<option value="351">Marco</option>
												<option value="107">Maria</option>
												<option value="144">Maria</option>
												<option value="27">Mecanizados</option>
												<option value="187">MIGUEL ORTIZ</option>
												<option value="30">mmm</option>
												<option value="16">Muebles FayRos SpA</option>
												<option value="104">Nuevo-fabricante</option>
												<option value="5">Obekorn</option>
												<option value="64">Orvibo</option>
												<option value="326">Pablo</option>
												<option value="142">Pablo Velasquez</option>
												<option value="57">Papeleria</option>
												<option value="293">pedro</option>
												<option value="294">pedro</option>
												<option value="296">pedro</option>
												<option value="318">Pedro</option>
												<option value="347">Pedro Fuentes</option>
												<option value="348">Pedro Fuentes</option>
												<option value="349">Pedro Fuentes</option>
												<option value="350">Pedro Fuentes</option>
												<option value="299">pepe</option>
												<option value="307">pepe</option>
												<option value="309">pepe</option>
												<option value="312">pepepe</option>
												<option value="314">pepepe</option>
												<option value="315">pepepe</option>
												<option value="189">pepito perez</option>
												<option value="190">pepito perez</option>
												<option value="6">Polar</option>
												<option value="152">Pollos San Miguel</option>
												<option value="155">Pollos San Miguel</option>
												<option value="2">Poseidon</option>
												<option value="387">ppp</option>
												<option value="388">ppp</option>
												<option value="308">Prueba</option>
												<option value="337">Prueba</option>
												<option value="341">Prueba</option>
												<option value="342">Prueba</option>
												<option value="316">Prueba1</option>
												<option value="18">rast</option>
												<option value="229">Razer</option>
												<option value="297">Ricardo</option>
												<option value="154">Rockys S.A.</option>
												<option value="157">Rockys S.A.</option>
												<option value="177">Rogger </option>
												<option value="178">Rogger </option>
												<option value="377">romario</option>
												<option value="130">Sebastián</option>
												<option value="129">Sebastián Porras</option>
												<option value="138">Sebastián Porras</option>
												<option value="139">Sebastián Porras</option>
												<option value="162">Sebastián Porras S</option>
												<option value="165">Sebastián Porras S</option>
												<option value="161">Sebastián Porras Surichaqui</option>
												<option value="163">Sebastián Porras Surichaqui</option>
												<option value="164">Sebastián Porras Surichaqui</option>
												<option value="166">Sebastián Porras Surichaqui</option>
												<option value="47">Sony</option>
												<option value="98">sras</option>
												<option value="122">st coluciones</option>
												<option value="124">st coluciones</option>
												<option value="146">st coluciones</option>
												<option value="147">st coluciones</option>
												<option value="89">st solcuiones</option>
												<option value="92">st solcuiones</option>
												<option value="94">st soluciones</option>
												<option value="97">st soluciones</option>
												<option value="1">stih</option>
												<option value="191">STUDIO4</option>
												<option value="55">Super</option>
												<option value="63">Supermercado</option>
												<option value="9">SUPLIDORA INDUSTRIAL 6 SGIMA, C.A.</option>
												<option value="48">Tecno Star Software</option>
												<option value="361">Titi</option>
												<option value="363">Titi</option>
												<option value="370">Titi</option>
												<option value="50">TOYOTA</option>
												<option value="358">Tupac</option>
												<option value="403">UAC</option>
												<option value="182">Valve</option>
												<option value="188">Valve</option>
												<option value="72">VAMAS</option>
												<option value="311">Wilber</option>
												<option value="319">wilber</option>
												<option value="325">wilber</option>
												<option value="15">WW Love your home</option>
												<option value="254">XIAOMI SAC</option>
												<option value="256">XIAOMI SAC</option>
										  </select>
				</div>
				<div class="col-md-4">
					<label for="estado" class="control-label">Estado</label>
					 <select class="form-control" id="estado" name="estado" required>
						<option value="">-- Selecciona --</option>
						<option value="1" selected>Activo</option>
						<option value="0">Inactivo</option>
					</select>
				</div>
				<div class="col-md-4">
					<label for="precio" class="control-label">Precio</label>
					<input type="text" class="form-control" id="precio" name="precio" placeholder="" required pattern="^[0-9]{1,11}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="13">
				</div>
			</div>			
			 
			  
			 
			 
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>	<!-- Modal -->
	<div class="modal fade" id="editModalProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar producto</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_producto" name="editar_producto">
			
			<div class="row">
				<div class="col-md-6">
					<label for="codigo" class="control-label">Código</label>
					<input type="text" class="form-control" id="mod_codigo" name="mod_codigo" placeholder="Código del producto" required>
					<input type="hidden" name="mod_id" id="mod_id">
				</div>
				<div class="col-md-6">
					<label for="modelo" class="control-label">Modelo</label>
					<input type="text" class="form-control" id="mod_modelo" name="mod_modelo" placeholder="Modelo del producto" >
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label for="mod_nombre" class="control-label">Nombre o descripción del producto</label>
					<textarea  id="mod_nombre" name="mod_nombre" class='form-control'></textarea >
				</div>
			</div>
			  
			<div class="row">
				<div class="col-md-4">
					<label for="mod_fabricante" class="control-label">Fabricante</label>
					 <select class="form-control" id="mod_fabricante" name="mod_fabricante">
					<option value="">-- Selecciona --</option>
											<option value="10">3M</option>
												<option value="391">a</option>
												<option value="392">a</option>
												<option value="393">a</option>
												<option value="390">aa</option>
												<option value="53">aaaa</option>
												<option value="287">ABG CONSTRUCCIONES METALICAS Y MONTAJES</option>
												<option value="353">ABG CONSTRUCCIONES METALICAS Y MONTAJES</option>
												<option value="100">Adam </option>
												<option value="317">adrian</option>
												<option value="255">Adrian benavente</option>
												<option value="322">Adrian benavente</option>
												<option value="328">Adrian benavente</option>
												<option value="329">Adrian benavente</option>
												<option value="333">Adrian benavente</option>
												<option value="334">Adrian benavente</option>
												<option value="335">Adrian benavente</option>
												<option value="339">Adrian benavente</option>
												<option value="340">Adrian benavente</option>
												<option value="355">Adrian benavente</option>
												<option value="198">Alejandra</option>
												<option value="205">Alejandra </option>
												<option value="206">Alejandra</option>
												<option value="65">Alejandro </option>
												<option value="19">Alicia</option>
												<option value="303">Alonso </option>
												<option value="324">Alonso</option>
												<option value="134">AmigoNuevo</option>
												<option value="136">AmigoNuevo</option>
												<option value="169">AmigoNuevo</option>
												<option value="115">Ana Quispe</option>
												<option value="118">Ana Quispe</option>
												<option value="170">Ana Quispe</option>
												<option value="73">ANGEL CORREA </option>
												<option value="20">Apple</option>
												<option value="257">apple sac</option>
												<option value="264">apple sac</option>
												<option value="172">armandohoyos</option>
												<option value="25">asdasd</option>
												<option value="91">Barja Estrada, Luis Diego</option>
												<option value="95">Barja Estrada, Luis Diego</option>
												<option value="99">Barja Estrada, Luis Diego</option>
												<option value="103">Barja Estrada, Luis Diego</option>
												<option value="109">Barja Estrada, Luis Diego</option>
												<option value="112">Barja Estrada, Luis Diego</option>
												<option value="186">Barja Estrada, Luis Diego</option>
												<option value="184">Barja Estrada, Luis Diego</option>
												<option value="395">bb</option>
												<option value="396">bb</option>
												<option value="397">bb</option>
												<option value="398">bb</option>
												<option value="399">bb</option>
												<option value="394">bbb</option>
												<option value="84">Bernardo</option>
												<option value="85">Bernardo</option>
												<option value="277">Bryan</option>
												<option value="310">Bryan</option>
												<option value="313">Bryan</option>
												<option value="74">CALERS</option>
												<option value="240">carlos davifd</option>
												<option value="87">Carpenters</option>
												<option value="101">Casaverde Diego</option>
												<option value="404">CAT</option>
												<option value="327">Cesar</option>
												<option value="344">Cesar</option>
												<option value="346">Cesar</option>
												<option value="366">Cesar</option>
												<option value="372">Cesar</option>
												<option value="244">Cesar Alvaro UPC</option>
												<option value="8">Chile Empresas</option>
												<option value="51">Dahua</option>
												<option value="7">Daker</option>
												<option value="102">dasadas</option>
												<option value="106">dasdas</option>
												<option value="384">dererer</option>
												<option value="49">diegooooooo</option>
												<option value="56">Drogueria</option>
												<option value="385">dssddsds</option>
												<option value="66">eeee</option>
												<option value="68">Enzo</option>
												<option value="386">erer</option>
												<option value="29">Este texto se mueve de abajo hacia arriba</option>
												<option value="31">Este texto se mueve de abajo hacia arriba</option>
												<option value="32">Este texto se mueve de abajo hacia arriba</option>
												<option value="33">Este texto se mueve de abajo hacia arriba</option>
												<option value="34">Este texto se mueve de abajo hacia arriba</option>
												<option value="35">Este texto se mueve de abajo hacia arriba</option>
												<option value="36">Este texto se mueve de abajo hacia arriba</option>
												<option value="37">Este texto se mueve de abajo hacia arriba</option>
												<option value="38">Este texto se mueve de abajo hacia arriba</option>
												<option value="39">Este texto se mueve de abajo hacia arriba</option>
												<option value="40">Este texto se mueve de abajo hacia arriba</option>
												<option value="41">Este texto se mueve de abajo hacia arriba</option>
												<option value="42">Este texto se mueve de abajo hacia arriba</option>
												<option value="43">Este texto se mueve de abajo hacia arriba</option>
												<option value="44">Este texto se mueve de abajo hacia arriba</option>
												<option value="45">Este texto se mueve de abajo hacia arriba</option>
												<option value="364">estejonnel</option>
												<option value="180">Evelyn Janeth</option>
												<option value="181">Evelyn Janeth</option>
												<option value="12">Evolis</option>
												<option value="246">fabrica1</option>
												<option value="249">fabrica1</option>
												<option value="284">fabrica1</option>
												<option value="288">fabrica1</option>
												<option value="289">fabrica1</option>
												<option value="215">FABRICADOR</option>
												<option value="174">Fabricante</option>
												<option value="179">Fabricante</option>
												<option value="382">fabricante 123</option>
												<option value="383">fabricante 123</option>
												<option value="389">fabricante 123</option>
												<option value="213">Fabricante de autos</option>
												<option value="235">Fabricante Diseño</option>
												<option value="247">Fabricante Diseño</option>
												<option value="262">Fabricante Diseño</option>
												<option value="270">Fabricante Diseño</option>
												<option value="278">Fabricante Diseño</option>
												<option value="292">Fabricante Diseño</option>
												<option value="298">Fabricante Diseño</option>
												<option value="330">Fabricante Diseño</option>
												<option value="336">Fabricante Diseño</option>
												<option value="345">Fabricante Diseño</option>
												<option value="352">Fabricante Diseño</option>
												<option value="356">Fabricante Diseño</option>
												<option value="360">Fabricante Diseño</option>
												<option value="365">Fabricante Diseño</option>
												<option value="367">Fabricante Diseño</option>
												<option value="368">Fabricante Diseño</option>
												<option value="369">Fabricante Diseño</option>
												<option value="380">Fabricante Diseño</option>
												<option value="381">Fabricante Diseño</option>
												<option value="111">Fabricante-nuevo</option>
												<option value="113">Fabricante-nuevo</option>
												<option value="158">Fabricanteeeeeee</option>
												<option value="160">Fabricanteeeeeeee</option>
												<option value="167">Fabricanteeeeeeee</option>
												<option value="171">fabricantesc</option>
												<option value="173">fabricantesc</option>
												<option value="175">fabricantesfrancis</option>
												<option value="222">fasfa</option>
												<option value="225">fasfa</option>
												<option value="77">Giancarlo</option>
												<option value="133">Giancarlo</option>
												<option value="137">Giancarlo</option>
												<option value="168">Giancarlo</option>
												<option value="176">Giancarlo</option>
												<option value="71">GOODYEAR</option>
												<option value="218">Google Inc</option>
												<option value="220">HP</option>
												<option value="221">HP</option>
												<option value="228">HP</option>
												<option value="250">HP</option>
												<option value="258">HP</option>
												<option value="268">HP</option>
												<option value="242">HUANCAYORK</option>
												<option value="105">Huber </option>
												<option value="110">Huber</option>
												<option value="117">Huber</option>
												<option value="119">Huber</option>
												<option value="123">Huber</option>
												<option value="141">Huber</option>
												<option value="145">Huber</option>
												<option value="148">Huber</option>
												<option value="149">Huber</option>
												<option value="150">Huber</option>
												<option value="153">Huber</option>
												<option value="156">Huber</option>
												<option value="67">inlusac</option>
												<option value="69">Jarquinigor</option>
												<option value="132">Javier Ortiz</option>
												<option value="135">Javier Ortiz</option>
												<option value="378">jean carlos</option>
												<option value="379">jean carlos</option>
												<option value="373">Jeffrey</option>
												<option value="374">Jeffrey</option>
												<option value="375">Jeffrey</option>
												<option value="376">Jeffrey</option>
												<option value="125">Jeremy Alcala</option>
												<option value="128">Jeremy Alcala</option>
												<option value="143">Jeremy Alcala</option>
												<option value="192">Jeremy Alcala</option>
												<option value="193">Jeremy Alcala</option>
												<option value="79">Jess</option>
												<option value="80">Jess</option>
												<option value="81">jess</option>
												<option value="46">Jestereo</option>
												<option value="226">JoaoElFabricante</option>
												<option value="227">JoaoElFabricante</option>
												<option value="251">JoaoElFabricante</option>
												<option value="253">JoaoElFabricante</option>
												<option value="200">JoaoFabricante</option>
												<option value="204">JoaoFabricante</option>
												<option value="194">Jonnel</option>
												<option value="195">Jonnel</option>
												<option value="209">JORGE RAYAS</option>
												<option value="211">JORGE RAYAS</option>
												<option value="214">JORGE RAYAS</option>
												<option value="217">JORGE RAYAS</option>
												<option value="239">Jose</option>
												<option value="243">Jose</option>
												<option value="82">Joseph</option>
												<option value="302">Juan</option>
												<option value="305">Juan</option>
												<option value="357">Juan</option>
												<option value="359">Juan</option>
												<option value="362">Juan</option>
												<option value="159">Judith Orosco</option>
												<option value="219">Julian Huayta</option>
												<option value="223">Julian Huayta</option>
												<option value="245">Julian Huayta</option>
												<option value="259">Julian Huayta</option>
												<option value="265">Julian Huayta</option>
												<option value="276">Julian Huayta</option>
												<option value="280">Julian Huayta</option>
												<option value="283">Julian Huayta</option>
												<option value="285">Julian Huayta</option>
												<option value="290">Julian Huayta</option>
												<option value="295">Julian Huayta</option>
												<option value="301">Julian Huayta</option>
												<option value="304">Julian Huayta</option>
												<option value="306">Julian Huayta</option>
												<option value="320">Julian Huayta</option>
												<option value="321">Julian Huayta</option>
												<option value="323">Julian Huayta</option>
												<option value="343">Julian Huayta</option>
												<option value="83">Julito Market</option>
												<option value="3">la colina</option>
												<option value="4">la colina</option>
												<option value="197">Leandro</option>
												<option value="86">Leonardo Samaniego Fab</option>
												<option value="88">Leonardo Samaniego Fab</option>
												<option value="90">Leonardo Samaniego Fab</option>
												<option value="114">LeoSamFabricante</option>
												<option value="116">LeoSamFabricante</option>
												<option value="126">LeoSamTech-Fabricante</option>
												<option value="127">LeoSamTech-Fabricante</option>
												<option value="120">LeoTechSam-Fabricante</option>
												<option value="121">LeoTechSam-Fabricante</option>
												<option value="52">LFFF</option>
												<option value="269">LIMA SAC</option>
												<option value="272">LIMA SAC</option>
												<option value="274">LIMA SAC</option>
												<option value="275">LIMA SAC</option>
												<option value="261">LIMAS SAC</option>
												<option value="266">LIMAS SAC</option>
												<option value="232">Lionel</option>
												<option value="300">Lionel</option>
												<option value="331">Lionel</option>
												<option value="338">Lionel</option>
												<option value="196">Liza</option>
												<option value="233">Logitech</option>
												<option value="267">Logitech</option>
												<option value="279">Logitech</option>
												<option value="281">Logitech</option>
												<option value="282">Logitech</option>
												<option value="286">Logitech</option>
												<option value="332">Logitech</option>
												<option value="76">LolaMarcela</option>
												<option value="151">Lu S.a.</option>
												<option value="354">Luis</option>
												<option value="207">Luis Angel</option>
												<option value="208">Luis Angel</option>
												<option value="210">Luis Angel</option>
												<option value="212">Luis Angel</option>
												<option value="231">Luis Angel</option>
												<option value="234">Luis Angel</option>
												<option value="237">Luis Angel</option>
												<option value="238">Luis Angel</option>
												<option value="241">Luis Angel</option>
												<option value="248">Luis Angel</option>
												<option value="252">Luis Angel</option>
												<option value="260">Luis Angel</option>
												<option value="263">Luis Angel</option>
												<option value="271">Luis Angel</option>
												<option value="273">Luis Angel</option>
												<option value="216">Luis Quichca</option>
												<option value="230">Luis Quichca</option>
												<option value="236">Luis Quichca</option>
												<option value="291">Luis Quichca</option>
												<option value="371">Luis Quichca</option>
												<option value="75">LUISAFERNANDA</option>
												<option value="93">María Jiménez</option>
												<option value="96">María Jiménez</option>
												<option value="108">María Jiménez</option>
												<option value="351">Marco</option>
												<option value="107">Maria</option>
												<option value="144">Maria</option>
												<option value="27">Mecanizados</option>
												<option value="187">MIGUEL ORTIZ</option>
												<option value="30">mmm</option>
												<option value="16">Muebles FayRos SpA</option>
												<option value="104">Nuevo-fabricante</option>
												<option value="5">Obekorn</option>
												<option value="64">Orvibo</option>
												<option value="326">Pablo</option>
												<option value="142">Pablo Velasquez</option>
												<option value="57">Papeleria</option>
												<option value="293">pedro</option>
												<option value="294">pedro</option>
												<option value="296">pedro</option>
												<option value="318">Pedro</option>
												<option value="347">Pedro Fuentes</option>
												<option value="348">Pedro Fuentes</option>
												<option value="349">Pedro Fuentes</option>
												<option value="350">Pedro Fuentes</option>
												<option value="299">pepe</option>
												<option value="307">pepe</option>
												<option value="309">pepe</option>
												<option value="312">pepepe</option>
												<option value="314">pepepe</option>
												<option value="315">pepepe</option>
												<option value="189">pepito perez</option>
												<option value="190">pepito perez</option>
												<option value="6">Polar</option>
												<option value="152">Pollos San Miguel</option>
												<option value="155">Pollos San Miguel</option>
												<option value="2">Poseidon</option>
												<option value="387">ppp</option>
												<option value="388">ppp</option>
												<option value="308">Prueba</option>
												<option value="337">Prueba</option>
												<option value="341">Prueba</option>
												<option value="342">Prueba</option>
												<option value="316">Prueba1</option>
												<option value="18">rast</option>
												<option value="229">Razer</option>
												<option value="297">Ricardo</option>
												<option value="154">Rockys S.A.</option>
												<option value="157">Rockys S.A.</option>
												<option value="177">Rogger </option>
												<option value="178">Rogger </option>
												<option value="377">romario</option>
												<option value="130">Sebastián</option>
												<option value="129">Sebastián Porras</option>
												<option value="138">Sebastián Porras</option>
												<option value="139">Sebastián Porras</option>
												<option value="162">Sebastián Porras S</option>
												<option value="165">Sebastián Porras S</option>
												<option value="161">Sebastián Porras Surichaqui</option>
												<option value="163">Sebastián Porras Surichaqui</option>
												<option value="164">Sebastián Porras Surichaqui</option>
												<option value="166">Sebastián Porras Surichaqui</option>
												<option value="47">Sony</option>
												<option value="98">sras</option>
												<option value="122">st coluciones</option>
												<option value="124">st coluciones</option>
												<option value="146">st coluciones</option>
												<option value="147">st coluciones</option>
												<option value="89">st solcuiones</option>
												<option value="92">st solcuiones</option>
												<option value="94">st soluciones</option>
												<option value="97">st soluciones</option>
												<option value="1">stih</option>
												<option value="191">STUDIO4</option>
												<option value="55">Super</option>
												<option value="63">Supermercado</option>
												<option value="9">SUPLIDORA INDUSTRIAL 6 SGIMA, C.A.</option>
												<option value="48">Tecno Star Software</option>
												<option value="361">Titi</option>
												<option value="363">Titi</option>
												<option value="370">Titi</option>
												<option value="50">TOYOTA</option>
												<option value="358">Tupac</option>
												<option value="403">UAC</option>
												<option value="182">Valve</option>
												<option value="188">Valve</option>
												<option value="72">VAMAS</option>
												<option value="311">Wilber</option>
												<option value="319">wilber</option>
												<option value="325">wilber</option>
												<option value="15">WW Love your home</option>
												<option value="254">XIAOMI SAC</option>
												<option value="256">XIAOMI SAC</option>
										  </select>
				</div>
				<div class="col-md-4">
					<label for="mod_estado" class="control-label">Estado</label>
					<select class="form-control" id="mod_estado" name="mod_estado" required>
						<option value="">-- Selecciona --</option>
						<option value="1" selected>Activo</option>
						<option value="0">Inactivo</option>
					</select>
				</div>
				<div class="col-md-4">
					<label for="mod_precio" class="control-label">Precio</label>
					<input type="text" class="form-control" id="mod_precio" name="mod_precio" placeholder="Precio de venta del producto" required pattern="^[0-9]{1,11}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="13">
				</div>
			</div>	
			 
			 
			  
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div> 
<form method="post" id="importar_datos" name="importar_datos" enctype="multipart/form-data">
<!-- Modal -->
<div class="modal fade " id="importar_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
		<h4 class="modal-title"><i class='fa fa-file'></i> Importar datos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body" >
		<div class="form-group">
			<label for="periodo_imp" class="control-label">Selecciona archivo</label>
			<input type="file" class='form-control' name="archivo" id="archivo" required>
			<p class="help-block">Carga tus productos desde una hoja de cálculo, ya sea en formato .xlsx ó .ods. Para realizar la importación de datos, asegúrate de usar el formato correcto. Puedes descargarlo aquí: <a href="assets/template/formato_importacion_productos.xlsx">Formato de importación de productos</a>  </p>
		</div>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary importar_datos"> Importar datos</button>
      </div>
    </div>
  </div>
</div>
</form>								<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Buscar productos</h4>
                                  <div class="row">
                                    <div class="col-md-3 nopadding">
										<input type="text" class="form-control" id="q" placeholder="Buscar por el código" onkeyup='load(1);'>
									</div>

									<div class="col-md-4 nopadding">
										<input type="text" class="form-control" id="q2" placeholder="Buscar por el nombre" onkeyup='load(1);'>
									</div>
                                    <div class="col-md-4 nopadding">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
											
												<select class="form-control" id="q3" onchange="load(1);">
													<option value="">Selecciona fabricante</option>
																												<option value="10">3M</option>
																														<option value="391">a</option>
																														<option value="392">a</option>
																														<option value="393">a</option>
																														<option value="390">aa</option>
																														<option value="53">aaaa</option>
																														<option value="287">ABG CONSTRUCCIONES METALICAS Y MONTAJES</option>
																														<option value="353">ABG CONSTRUCCIONES METALICAS Y MONTAJES</option>
																														<option value="100">Adam </option>
																														<option value="317">adrian</option>
																														<option value="255">Adrian benavente</option>
																														<option value="322">Adrian benavente</option>
																														<option value="328">Adrian benavente</option>
																														<option value="329">Adrian benavente</option>
																														<option value="333">Adrian benavente</option>
																														<option value="334">Adrian benavente</option>
																														<option value="335">Adrian benavente</option>
																														<option value="339">Adrian benavente</option>
																														<option value="340">Adrian benavente</option>
																														<option value="355">Adrian benavente</option>
																														<option value="198">Alejandra</option>
																														<option value="205">Alejandra </option>
																														<option value="206">Alejandra</option>
																														<option value="65">Alejandro </option>
																														<option value="19">Alicia</option>
																														<option value="303">Alonso </option>
																														<option value="324">Alonso</option>
																														<option value="134">AmigoNuevo</option>
																														<option value="136">AmigoNuevo</option>
																														<option value="169">AmigoNuevo</option>
																														<option value="115">Ana Quispe</option>
																														<option value="118">Ana Quispe</option>
																														<option value="170">Ana Quispe</option>
																														<option value="73">ANGEL CORREA </option>
																														<option value="20">Apple</option>
																														<option value="257">apple sac</option>
																														<option value="264">apple sac</option>
																														<option value="172">armandohoyos</option>
																														<option value="25">asdasd</option>
																														<option value="91">Barja Estrada, Luis Diego</option>
																														<option value="95">Barja Estrada, Luis Diego</option>
																														<option value="99">Barja Estrada, Luis Diego</option>
																														<option value="103">Barja Estrada, Luis Diego</option>
																														<option value="109">Barja Estrada, Luis Diego</option>
																														<option value="112">Barja Estrada, Luis Diego</option>
																														<option value="186">Barja Estrada, Luis Diego</option>
																														<option value="184">Barja Estrada, Luis Diego</option>
																														<option value="395">bb</option>
																														<option value="396">bb</option>
																														<option value="397">bb</option>
																														<option value="398">bb</option>
																														<option value="399">bb</option>
																														<option value="394">bbb</option>
																														<option value="84">Bernardo</option>
																														<option value="85">Bernardo</option>
																														<option value="277">Bryan</option>
																														<option value="310">Bryan</option>
																														<option value="313">Bryan</option>
																														<option value="74">CALERS</option>
																														<option value="240">carlos davifd</option>
																														<option value="87">Carpenters</option>
																														<option value="101">Casaverde Diego</option>
																														<option value="404">CAT</option>
																														<option value="327">Cesar</option>
																														<option value="344">Cesar</option>
																														<option value="346">Cesar</option>
																														<option value="366">Cesar</option>
																														<option value="372">Cesar</option>
																														<option value="244">Cesar Alvaro UPC</option>
																														<option value="8">Chile Empresas</option>
																														<option value="51">Dahua</option>
																														<option value="7">Daker</option>
																														<option value="102">dasadas</option>
																														<option value="106">dasdas</option>
																														<option value="384">dererer</option>
																														<option value="49">diegooooooo</option>
																														<option value="56">Drogueria</option>
																														<option value="385">dssddsds</option>
																														<option value="66">eeee</option>
																														<option value="68">Enzo</option>
																														<option value="386">erer</option>
																														<option value="29">Este texto se mueve de abajo hacia arriba</option>
																														<option value="31">Este texto se mueve de abajo hacia arriba</option>
																														<option value="32">Este texto se mueve de abajo hacia arriba</option>
																														<option value="33">Este texto se mueve de abajo hacia arriba</option>
																														<option value="34">Este texto se mueve de abajo hacia arriba</option>
																														<option value="35">Este texto se mueve de abajo hacia arriba</option>
																														<option value="36">Este texto se mueve de abajo hacia arriba</option>
																														<option value="37">Este texto se mueve de abajo hacia arriba</option>
																														<option value="38">Este texto se mueve de abajo hacia arriba</option>
																														<option value="39">Este texto se mueve de abajo hacia arriba</option>
																														<option value="40">Este texto se mueve de abajo hacia arriba</option>
																														<option value="41">Este texto se mueve de abajo hacia arriba</option>
																														<option value="42">Este texto se mueve de abajo hacia arriba</option>
																														<option value="43">Este texto se mueve de abajo hacia arriba</option>
																														<option value="44">Este texto se mueve de abajo hacia arriba</option>
																														<option value="45">Este texto se mueve de abajo hacia arriba</option>
																														<option value="364">estejonnel</option>
																														<option value="180">Evelyn Janeth</option>
																														<option value="181">Evelyn Janeth</option>
																														<option value="12">Evolis</option>
																														<option value="246">fabrica1</option>
																														<option value="249">fabrica1</option>
																														<option value="284">fabrica1</option>
																														<option value="288">fabrica1</option>
																														<option value="289">fabrica1</option>
																														<option value="215">FABRICADOR</option>
																														<option value="174">Fabricante</option>
																														<option value="179">Fabricante</option>
																														<option value="382">fabricante 123</option>
																														<option value="383">fabricante 123</option>
																														<option value="389">fabricante 123</option>
																														<option value="213">Fabricante de autos</option>
																														<option value="235">Fabricante Diseño</option>
																														<option value="247">Fabricante Diseño</option>
																														<option value="262">Fabricante Diseño</option>
																														<option value="270">Fabricante Diseño</option>
																														<option value="278">Fabricante Diseño</option>
																														<option value="292">Fabricante Diseño</option>
																														<option value="298">Fabricante Diseño</option>
																														<option value="330">Fabricante Diseño</option>
																														<option value="336">Fabricante Diseño</option>
																														<option value="345">Fabricante Diseño</option>
																														<option value="352">Fabricante Diseño</option>
																														<option value="356">Fabricante Diseño</option>
																														<option value="360">Fabricante Diseño</option>
																														<option value="365">Fabricante Diseño</option>
																														<option value="367">Fabricante Diseño</option>
																														<option value="368">Fabricante Diseño</option>
																														<option value="369">Fabricante Diseño</option>
																														<option value="380">Fabricante Diseño</option>
																														<option value="381">Fabricante Diseño</option>
																														<option value="111">Fabricante-nuevo</option>
																														<option value="113">Fabricante-nuevo</option>
																														<option value="158">Fabricanteeeeeee</option>
																														<option value="160">Fabricanteeeeeeee</option>
																														<option value="167">Fabricanteeeeeeee</option>
																														<option value="171">fabricantesc</option>
																														<option value="173">fabricantesc</option>
																														<option value="175">fabricantesfrancis</option>
																														<option value="222">fasfa</option>
																														<option value="225">fasfa</option>
																														<option value="77">Giancarlo</option>
																														<option value="133">Giancarlo</option>
																														<option value="137">Giancarlo</option>
																														<option value="168">Giancarlo</option>
																														<option value="176">Giancarlo</option>
																														<option value="71">GOODYEAR</option>
																														<option value="218">Google Inc</option>
																														<option value="220">HP</option>
																														<option value="221">HP</option>
																														<option value="228">HP</option>
																														<option value="250">HP</option>
																														<option value="258">HP</option>
																														<option value="268">HP</option>
																														<option value="242">HUANCAYORK</option>
																														<option value="105">Huber </option>
																														<option value="110">Huber</option>
																														<option value="117">Huber</option>
																														<option value="119">Huber</option>
																														<option value="123">Huber</option>
																														<option value="141">Huber</option>
																														<option value="145">Huber</option>
																														<option value="148">Huber</option>
																														<option value="149">Huber</option>
																														<option value="150">Huber</option>
																														<option value="153">Huber</option>
																														<option value="156">Huber</option>
																														<option value="67">inlusac</option>
																														<option value="69">Jarquinigor</option>
																														<option value="132">Javier Ortiz</option>
																														<option value="135">Javier Ortiz</option>
																														<option value="378">jean carlos</option>
																														<option value="379">jean carlos</option>
																														<option value="373">Jeffrey</option>
																														<option value="374">Jeffrey</option>
																														<option value="375">Jeffrey</option>
																														<option value="376">Jeffrey</option>
																														<option value="125">Jeremy Alcala</option>
																														<option value="128">Jeremy Alcala</option>
																														<option value="143">Jeremy Alcala</option>
																														<option value="192">Jeremy Alcala</option>
																														<option value="193">Jeremy Alcala</option>
																														<option value="79">Jess</option>
																														<option value="80">Jess</option>
																														<option value="81">jess</option>
																														<option value="46">Jestereo</option>
																														<option value="226">JoaoElFabricante</option>
																														<option value="227">JoaoElFabricante</option>
																														<option value="251">JoaoElFabricante</option>
																														<option value="253">JoaoElFabricante</option>
																														<option value="200">JoaoFabricante</option>
																														<option value="204">JoaoFabricante</option>
																														<option value="194">Jonnel</option>
																														<option value="195">Jonnel</option>
																														<option value="209">JORGE RAYAS</option>
																														<option value="211">JORGE RAYAS</option>
																														<option value="214">JORGE RAYAS</option>
																														<option value="217">JORGE RAYAS</option>
																														<option value="239">Jose</option>
																														<option value="243">Jose</option>
																														<option value="82">Joseph</option>
																														<option value="302">Juan</option>
																														<option value="305">Juan</option>
																														<option value="357">Juan</option>
																														<option value="359">Juan</option>
																														<option value="362">Juan</option>
																														<option value="159">Judith Orosco</option>
																														<option value="219">Julian Huayta</option>
																														<option value="223">Julian Huayta</option>
																														<option value="245">Julian Huayta</option>
																														<option value="259">Julian Huayta</option>
																														<option value="265">Julian Huayta</option>
																														<option value="276">Julian Huayta</option>
																														<option value="280">Julian Huayta</option>
																														<option value="283">Julian Huayta</option>
																														<option value="285">Julian Huayta</option>
																														<option value="290">Julian Huayta</option>
																														<option value="295">Julian Huayta</option>
																														<option value="301">Julian Huayta</option>
																														<option value="304">Julian Huayta</option>
																														<option value="306">Julian Huayta</option>
																														<option value="320">Julian Huayta</option>
																														<option value="321">Julian Huayta</option>
																														<option value="323">Julian Huayta</option>
																														<option value="343">Julian Huayta</option>
																														<option value="83">Julito Market</option>
																														<option value="3">la colina</option>
																														<option value="4">la colina</option>
																														<option value="197">Leandro</option>
																														<option value="86">Leonardo Samaniego Fab</option>
																														<option value="88">Leonardo Samaniego Fab</option>
																														<option value="90">Leonardo Samaniego Fab</option>
																														<option value="114">LeoSamFabricante</option>
																														<option value="116">LeoSamFabricante</option>
																														<option value="126">LeoSamTech-Fabricante</option>
																														<option value="127">LeoSamTech-Fabricante</option>
																														<option value="120">LeoTechSam-Fabricante</option>
																														<option value="121">LeoTechSam-Fabricante</option>
																														<option value="52">LFFF</option>
																														<option value="269">LIMA SAC</option>
																														<option value="272">LIMA SAC</option>
																														<option value="274">LIMA SAC</option>
																														<option value="275">LIMA SAC</option>
																														<option value="261">LIMAS SAC</option>
																														<option value="266">LIMAS SAC</option>
																														<option value="232">Lionel</option>
																														<option value="300">Lionel</option>
																														<option value="331">Lionel</option>
																														<option value="338">Lionel</option>
																														<option value="196">Liza</option>
																														<option value="233">Logitech</option>
																														<option value="267">Logitech</option>
																														<option value="279">Logitech</option>
																														<option value="281">Logitech</option>
																														<option value="282">Logitech</option>
																														<option value="286">Logitech</option>
																														<option value="332">Logitech</option>
																														<option value="76">LolaMarcela</option>
																														<option value="151">Lu S.a.</option>
																														<option value="354">Luis</option>
																														<option value="207">Luis Angel</option>
																														<option value="208">Luis Angel</option>
																														<option value="210">Luis Angel</option>
																														<option value="212">Luis Angel</option>
																														<option value="231">Luis Angel</option>
																														<option value="234">Luis Angel</option>
																														<option value="237">Luis Angel</option>
																														<option value="238">Luis Angel</option>
																														<option value="241">Luis Angel</option>
																														<option value="248">Luis Angel</option>
																														<option value="252">Luis Angel</option>
																														<option value="260">Luis Angel</option>
																														<option value="263">Luis Angel</option>
																														<option value="271">Luis Angel</option>
																														<option value="273">Luis Angel</option>
																														<option value="216">Luis Quichca</option>
																														<option value="230">Luis Quichca</option>
																														<option value="236">Luis Quichca</option>
																														<option value="291">Luis Quichca</option>
																														<option value="371">Luis Quichca</option>
																														<option value="75">LUISAFERNANDA</option>
																														<option value="93">María Jiménez</option>
																														<option value="96">María Jiménez</option>
																														<option value="108">María Jiménez</option>
																														<option value="351">Marco</option>
																														<option value="107">Maria</option>
																														<option value="144">Maria</option>
																														<option value="27">Mecanizados</option>
																														<option value="187">MIGUEL ORTIZ</option>
																														<option value="30">mmm</option>
																														<option value="16">Muebles FayRos SpA</option>
																														<option value="104">Nuevo-fabricante</option>
																														<option value="5">Obekorn</option>
																														<option value="64">Orvibo</option>
																														<option value="326">Pablo</option>
																														<option value="142">Pablo Velasquez</option>
																														<option value="57">Papeleria</option>
																														<option value="293">pedro</option>
																														<option value="294">pedro</option>
																														<option value="296">pedro</option>
																														<option value="318">Pedro</option>
																														<option value="347">Pedro Fuentes</option>
																														<option value="348">Pedro Fuentes</option>
																														<option value="349">Pedro Fuentes</option>
																														<option value="350">Pedro Fuentes</option>
																														<option value="299">pepe</option>
																														<option value="307">pepe</option>
																														<option value="309">pepe</option>
																														<option value="312">pepepe</option>
																														<option value="314">pepepe</option>
																														<option value="315">pepepe</option>
																														<option value="189">pepito perez</option>
																														<option value="190">pepito perez</option>
																														<option value="6">Polar</option>
																														<option value="152">Pollos San Miguel</option>
																														<option value="155">Pollos San Miguel</option>
																														<option value="2">Poseidon</option>
																														<option value="387">ppp</option>
																														<option value="388">ppp</option>
																														<option value="308">Prueba</option>
																														<option value="337">Prueba</option>
																														<option value="341">Prueba</option>
																														<option value="342">Prueba</option>
																														<option value="316">Prueba1</option>
																														<option value="18">rast</option>
																														<option value="229">Razer</option>
																														<option value="297">Ricardo</option>
																														<option value="154">Rockys S.A.</option>
																														<option value="157">Rockys S.A.</option>
																														<option value="177">Rogger </option>
																														<option value="178">Rogger </option>
																														<option value="377">romario</option>
																														<option value="130">Sebastián</option>
																														<option value="129">Sebastián Porras</option>
																														<option value="138">Sebastián Porras</option>
																														<option value="139">Sebastián Porras</option>
																														<option value="162">Sebastián Porras S</option>
																														<option value="165">Sebastián Porras S</option>
																														<option value="161">Sebastián Porras Surichaqui</option>
																														<option value="163">Sebastián Porras Surichaqui</option>
																														<option value="164">Sebastián Porras Surichaqui</option>
																														<option value="166">Sebastián Porras Surichaqui</option>
																														<option value="47">Sony</option>
																														<option value="98">sras</option>
																														<option value="122">st coluciones</option>
																														<option value="124">st coluciones</option>
																														<option value="146">st coluciones</option>
																														<option value="147">st coluciones</option>
																														<option value="89">st solcuiones</option>
																														<option value="92">st solcuiones</option>
																														<option value="94">st soluciones</option>
																														<option value="97">st soluciones</option>
																														<option value="1">stih</option>
																														<option value="191">STUDIO4</option>
																														<option value="55">Super</option>
																														<option value="63">Supermercado</option>
																														<option value="9">SUPLIDORA INDUSTRIAL 6 SGIMA, C.A.</option>
																														<option value="48">Tecno Star Software</option>
																														<option value="361">Titi</option>
																														<option value="363">Titi</option>
																														<option value="370">Titi</option>
																														<option value="50">TOYOTA</option>
																														<option value="358">Tupac</option>
																														<option value="403">UAC</option>
																														<option value="182">Valve</option>
																														<option value="188">Valve</option>
																														<option value="72">VAMAS</option>
																														<option value="311">Wilber</option>
																														<option value="319">wilber</option>
																														<option value="325">wilber</option>
																														<option value="15">WW Love your home</option>
																														<option value="254">XIAOMI SAC</option>
																														<option value="256">XIAOMI SAC</option>
																											</select>
												
												<span class="input-group-btn input-group-append">
													<button class="btn btn-secondary btn-outline bootstrap-touchspin-up" type="button" onclick="load(1);"><i class='fa fa-search'></i> Buscar</button>
												</span>
											</div>
                                                
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-1">
										<span id="loader"></span>
									</div>
									
									
									
									
									
									
									
                                </div>
								<div class="row">

									<div id="resultados" class='col-sm-12 '></div><!-- Carga los datos ajax -->
									<div class='outer_div' class='col-sm-12 ' style="width:100%"></div><!-- Carga los datos ajax -->
								</div>
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
	<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>	<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
	<script type="text/javascript" src="assets/js/productos.js"></script>
	
 </body>
</html>
