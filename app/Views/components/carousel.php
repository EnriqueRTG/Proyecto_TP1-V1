<div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

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
    <span class="visually-hidden">Next</span>
  </button>
</div>