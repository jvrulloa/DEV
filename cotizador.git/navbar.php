<header class="topbar">
<nav class="navbar navbar-expand-md navbar-light bg-default">
  <div class="container-fluid">
  <b>
                            <!-- Light Logo icon -->
                            <img src="assets/images/cart_icon.png" alt="homepage" class="light-logo" style="width:34px" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->

                         <!-- Light Logo text -->
						<span class='text-white'> Cotizador <b>Web</b></span>


    <div class="navbar-collapse collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
      <li class="nav-item">
                            <a class="link nav-link "  href="index.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="link nav-link dropdown-toogle"  href="cotizaciones.php">Cotizaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="link nav-link <?php echo $clientes; ?>"  href="clientes.php">Clientes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="link nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Catálogo
                            </a>
                            <ul class="dropdown-menu dropdown-itm">
                                <li><a class="dropdown-item" href="productos.php">Productos</a></li>

                                <li><a class="dropdown-item" href="fabricantes.php">Fabricantes</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="link nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Administrar
                                accesos
                            </a>
                            <ul class="dropdown-menu dropdown-itm">
                                <li><a class="dropdown-item" href="usuarios.php">Usuarios</a></li>

                                <li><a class="dropdown-item" href="group_list.php">Roles de usuario</a></li>

                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Configuración
                            </a>
                            <ul class="dropdown-menu dropdown-itm">
                                <li class="nav-item"><a class="dropdown-item" href="empresa.php">Perfil de la empresa</a></li>

                                <li><a class="dropdown-item" href="monedas.php">Monedas</a></li>

                                <li><a class="dropdown-item" href="impuestos.php">Impuestos</a></li>

                                <li><a class="dropdown-item" href="plantillas.php">Plantillas</a></li>

                            </ul>
                        </li>
                        <li class="flex-fill">
                        </li>


        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class='fa fa-user'></i> demo</a>

          <div class="dropdown-menu dropdown-menu-lg-start animated flipInY">
                                <ul class="dropdown-user dropdown-usr">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="assets/images/users/avatar.png" alt="user"></div>
                                            <div class="u-text">
                                                <h4>demo</h4>
                                                <p class="text-muted">info@obedalvarado.com</p></div>
                                        </div>
                                    </li>

                                    <li><a class="dropdown-item" href="usuarios.php?profile=1"><i class="ti-user"></i> Mi Perfil</a></li>

                                    <li><a class="dropdown-item" href="cotizaciones.php?type=1"><i class="ti-wallet"></i> Mis cotizaciones</a></li>

                                    <li><a class="dropdown-item" href="login.php?logout"><i class="fa fa-power-off"></i> Cerrar sesión</a></li>
                                </ul>
                            </div>
        </li>

      </ul>


    </div>
  </div>
</nav>
</header>




