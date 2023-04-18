<!--Navbar-->
<nav class="navbar navbar-expand-lg" id="navbar-cliente">
    <div class="container-fluid">

        <!--Bloque que contendra a la imagen y navbar-toggler-->
        <div class="d-flex">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand ms-4" href="<?php echo base_url(); ?>">
                <img class="img-fluid" id="imagen-logotipo" src="<?= base_url(); ?>assets/img/logo/logo.png" alt="Logo">
            </a>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
            <ul class="navbar-nav m-auto my-3 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 120px;" id="lista-nav-items">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('sobre'); ?>">Quienes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('comercializacion'); ?>">Comercializacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('contacto'); ?>">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('terminos'); ?>">Terminos y Usos</a>
                </li>
                <!-- ver su integracion para la segunda etapa-->
                <!--
                    <li class="nav-item dropdown">
                        <a class="nav-lin dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Acción</a></li>
                            <li><a class="dropdown-item" href="#">Otra acción</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
                        </ul>
                    </li>
                -->
            </ul>
            <!-- ver su integracion para la segunda etapa-->
            <!--
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            -->
        </div>
    </div>
</nav>