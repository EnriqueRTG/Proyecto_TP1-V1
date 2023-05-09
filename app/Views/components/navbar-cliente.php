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
                    <a class="nav-link text-uppercase" href="<?php echo base_url('nosotros'); ?>">Nosotros</a>
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

                <!-- Verificar si el usuario ha iniciado sesión -->
                <?php if (session()->get('isLoggedIn')) : ?>
                    <button class=" btn btn-lg">
                        <a href="">
                            <i class="bi bi-cart"></i>
                        </a>
                        <!-- incorporar codigo php para devolver el calculo de la cantidad de articulos en el carrito -->
                        <span class="badge text-bg-secondary">

                        </span>

                        <!-- Example split danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person"></i>
                            </button>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Pedidos</a></li>
                                <li><a class="dropdown-item" href="#">Consultas</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Salir</a></li>
                            </ul>
                        </div>


                    </button>
                <?php else : ?>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Ingresar
                        <i class="bi bi-person"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content card bg-transparent">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Inicio de Sesion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <form action="<?php echo base_url('logincontroller/procesar') ?>" method="POST">
                                        <div class="form-outline form-white mb-4">
                                            <input type="text" id="typeEmailX" class="form-control form-control-lg" />
                                            <label class="form-label" for="user">Usuario</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                                            <label class="form-label" for="password">Contraseña</label>
                                        </div>

                                        <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="<?php echo base_url('/recuperacion'); ?>">Olvido su contraseña?</a></p>

                                        <div class=" text-center">
                                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Ingresar</button>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>

            </ul>
            <!-- ver su integracion para la segunda etapa-->

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>



        </div>
    </div>
</nav>