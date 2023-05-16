<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?php echo base_url('/panel'); ?>">Panel</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-5 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav d-none d-md-inline-block ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-gear h3"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!"><i class="bi bi-gear-fill"></i> Perfil</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!"><i class="bi bi-door-open-fill"></i> Salir</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="<?php echo base_url(''); ?>">
                            <div class="sb-nav-link-icon"><i class="bi bi-shop-window"></i></div>
                            Vista de la Tienda
                        </a>
                        <div class="sb-sidenav-menu-heading">Operaciones</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="bi bi-box-seam-fill"></i></div>
                            Articulos
                            <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down-fill"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html"><i class="bi bi-plus"></i> Agregar</a>
                                <a class="nav-link" href="layout-sidenav-light.html"><i class="bi bi-paint-bucket"></i>  Editar</a>
                                <a class="nav-link" href="layout-sidenav-light.html"><i class="bi bi-dash"></i>  Eliminar</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                            Usuarios
                            <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down-fill"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html"><i class="bi bi-plus"></i> Agregar</a>
                                <a class="nav-link" href="layout-sidenav-light.html"><i class="bi bi-paint-bucket"></i> Editar</a>
                                <a class="nav-link" href="layout-sidenav-light.html"><i class="bi bi-dash"></i> Eliminar</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Otros</div>
                        <a class="nav-link" href="<?php echo base_url('panel/graficos'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Graficos
                        </a>
                        <a class="nav-link" href="<?php echo base_url('panel/tablas'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tablas
                        </a>
                        <a class="nav-link" href="<?php echo base_url('panel/tablas'); ?>">
                            <div class="sb-nav-link-icon"><i class="bi bi-envelope-open-fill"></i></div>
                            Mensajes
                        </a>
                        <a class="nav-link" href="<?php echo base_url('panel/tablas'); ?>">
                            <div class="sb-nav-link-icon"><i class="bi bi-pass-fill"></i></div>
                            Ordenes
                        </a>
                        <a class="nav-link" href="<?php echo base_url('panel/tablas'); ?>">
                            <div class="sb-nav-link-icon"><i class="bi bi-cash-coin"></i></div>
                            Ventas
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Conectado como: </div>
                    Administrator
                </div>
            </nav>
        </div>