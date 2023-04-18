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
<section class="container" id="ctr-presentacion">
    <div class="card" id="ctr-presentacion-card">
        <div class="card-header" id="ctr-presentacion-card-header">
            <p class="display-5 fw-bold">Bienvenido</p>
        </div>
        <div class="card-body" id="ctr-presentacion-card-body">
            <p class="card-text">Somos una empresa joven dedicada a la comercialización de maquinas, tintas, insumos y todo aquello que necesites
                para equipar tu salon y puedas desarrollar tu actividad como un profesional.
                En <span class="fw-bold">Tattoo Supply Store</span> estamos dispuestos a asesorarte y ofrecerte la mejor atencion.
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
<section class="container" id="contenedor-caracteristicas">
    <div class="row mt-4 gy-3" id="contenedor-caracteristicas-primera-fila">
        <div class="col">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/fecture/maquina-tatuar.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Maquinas</h5>
                    <p class=" card-text">Maquinas de bobina, rotativas y pen. Nacionales e importadas.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/fecture/fuente.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Fuentes</h5>
                    <p class=" card-text">Fuentes alambricas e inhalambricas, digitales y analogicas.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/fecture/tintas.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tintas</h5>
                    <p class=" card-text">Tintas en una amplia gama de colores y vegan.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 gy-3" id="contenedor-caracteristicas-segunda-fila">
        <div class="col">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/fecture/mobiliario.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Mobiliario</h5>
                    <p class=" card-text">Camillas, bancos, sillas, apoya brazos y muebles para salon.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/fecture/insumos-accesorios.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Insumo y Accesorios</h5>
                    <p class=" card-text">Guantes, tetinas, bandas elasticas, baselina, etc.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/fecture/kits.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Kits/Combos</h5>
                    <p class=" card-text">Kits de inicio o upgrate. Combos para insumos y herramientas</p>
                </div>
            </div>
        </div>
    </div>
</section>