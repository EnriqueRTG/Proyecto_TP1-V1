<!-- Responsive navbar-->
<nav id="navbar-cliente" class="navbar navbar-expand-lg">

    <div class="container">

        <a class="navbar-brand" href="#">
            <img id="imagen-logotipo" src="<?php echo base_url(); ?>assets/img/logo/logo.png" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Principal</a>
                </li>

                <!-- 
                    Evaluar incorporar Dropdown para agrupar paginas del negocio
                -->

                <li class="nav-item">
                    <a class="nav-link" href="#">Quienes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Comercializacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Terminos y Usos</a>
                </li>

                <!--
                     Para la segunda parte
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catalogo</a>
                    </li>
                -->

            </ul>
        </div>

        <!-- Para la segunda parte -->

        <!-- Evaluar incorporar Dropdown para agrupar opciones de login y carrito 

        <div class="btn-group">

            <button type="button" class="btn ms-auto mb-2 mb-lg-0" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person btn"></i>
            </button>

            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="#">Checkout</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Favoritos</a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <a class="btn btn-dark" href="#">Iniciar Sesion</a>
                    </a>
                </li>
            </ul>
        </div>
        -->

    </div>

</nav>