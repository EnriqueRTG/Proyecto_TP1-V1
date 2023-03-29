<nav id="navbar-cliente" class="navbar navbar-expand-lg container-fluid">

    <div class="container" id="elementos-navbar">

        <a class="navbar-brand" href="#">

            <img id="imagen-logotipo" src="<?php echo base_url(); ?>../assets/img/Logo.png" alt="Logo">

        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <div class="navbar-nav">

                <a class="nav-link active" aria-current="page" href="#">Principal</a>

                <a class="nav-link" href="#">Quienes Somos</a>

                <a class="nav-link" href="#">Comercializacion</a>

                <a class="nav-link" href="#">Contacto</a>

            </div>


            <div class="dropdown">
                <a class="btn btn-secondary dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i   class="bi bi-person"></i>
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Checkout</a></li>
                    <li><a class="dropdown-item" href="#">Favoritos</a></li>
                    <li><a class="dropdown-item" href="#">
                        <a class="btn btn-dark" href="#">Iniciar Sesión</a>
                    </a></li>
                </ul>
            </div>

        </div>

    </div>

</nav>