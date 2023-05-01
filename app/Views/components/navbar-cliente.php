<!--Navbar-->
<nav class="navbar navbar-expand-lg" id="navbar-cliente">
    <div class="container-fluid">

        <!--Bloque que contendra a la imagen y navbar-toggler-->
        <div class="d-flex">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand ms-lg-5 ms-3" href="<?php echo base_url(); ?>">
                <img class="img-fluid" id="imagen-logotipo" src="<?= base_url(); ?>assets/img/logo/logo.png" alt="Logo">
            </a>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
            <ul class="navbar-nav m-auto my-3 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 120px;" id="lista-nav-items">
                <li class="nav-item mx-1">
                    <a class="nav-link text-uppercase" aria-current="page" href="<?php echo base_url(); ?>">Principal</a>
                <li class="nav-item mx-1">
                    <a class="nav-link text-uppercase" href="<?php echo base_url('catalogo'); ?>">Catalogo</a>
                </li>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link text-uppercase" href="<?php echo base_url('sobre'); ?>">Quienes Somos</a>
                </li>

                <!-- ver su integracion para la segunda etapa-->

                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mas Info
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li class="nav-item mx-1">
                            <a class="nav-link text-uppercase" href="<?php echo base_url('comercializacion'); ?>">Comercializacion</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link text-uppercase" href="<?php echo base_url('contacto'); ?>">Contacto</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link text-uppercase" href="<?php echo base_url('terminos'); ?>">Terminos y Usos</a>
                        </li>
                    </ul>
                </li>

                <bot id="ctr-presentacion-card-boton" class=" text-center">
                    <a class="btn btn-lg text-uppercase" href="<?php echo base_url('ingreso'); ?>">Ingresar</a>
                </div>

            </ul>
            <!-- ver su integracion para la segunda etapa-->

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>



        </div>
    </div>
</nav>