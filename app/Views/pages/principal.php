<!--carrusel-->
<section id="carouselExample" class="carousel slide d-none d-md-block">
    <div class="carousel-inner" id="imagenes-carrusel">
        <div class="carousel-item active">
            <img src="<?php echo base_url(); ?>assets/img/carousel/banner-estencil.png" class="img-fluid d-block w-100" alt="banner-linea-inkplay">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/img/carousel/banner-maquinas.png" class="d-block w-100" alt="banner-tattoo-machines">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/img/carousel/banner-fuentes.png" class="d-block w-100" alt="banner-energy-sources">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
    </button>
</section>

<!-- seccion de la pagina principal  con presentacion-->
<div class="card1 container-fluid">
    <h5 class="card-title text-uppercase texto">Bienvenido</h5>
</div>

<section class="container" id="ctr-presentacion">
    <div class="card" id="ctr-presentacion-card">
        <div class="card-body" id="ctr-presentacion-card-body">
            <p class="card-text">Somos una empresa joven dedicada a la comercialización de máquinas, tintas, insumos y todo aquello
                que necesites para equipar tu salón y puedas desarrollar tu actividad como un profesional.
                En <span class="fw-bold">Tattoo Supply Store</span> estamos dispuestos a asesorarte y ofrecerte la mejor atención.
                Trabajamos ofreciendo los mejores productos, nacionales como importados, tales como: Cheyenne, Dynamic Ink, EZ, etc.
            </p>
            <!-- implementacion segunda parte
            <div id="ctr-presentacion-card-boton">
                <a class="btn btn-primary btn-lg" href="#!">Ver Catalogo</a>
            </div>
            -->
        </div>
    </div>
</section>

<!-- seccion de la pagina principal  con principales productos ofrecidos-->
<section class="container">

    <div class="row mt-lg-4 mt-0">
        <div class="col col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-3 mb-1">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/fecture/maquina-tatuar.png" alt="Maquina de Tatuar" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Máquinas</h5>

                </div>
            </div>
        </div>
        <div class="col col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-3 mb-1">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/fecture/fuente.png" alt="Fuente de poder" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Fuentes</h5>

                </div>
            </div>
        </div>
        <div class="col col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-3 mb-1">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/fecture/tintas.png" alt="Tintas para tatuar" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Tintas</h5>

                </div>
            </div>
        </div>

        <div class="col col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-3 mb-1">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/fecture/mobiliario.png" alt="Camilla" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Mobiliario</h5>

                </div>
            </div>
        </div>
        <div class="col col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-3 mb-1">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/fecture/insumos-accesorios.png" alt="Insumos y accesorios" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Insumos y Accesorios</h5>

                </div>
            </div>
        </div>
        <div class="col col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-3 mb-1">
            <div class="card ">
                <img src="<?php echo base_url(); ?>assets/img/fecture/kits.png" alt="Kit" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Kits/Combos</h5>

                </div>
            </div>
        </div>

    </div>

</section>