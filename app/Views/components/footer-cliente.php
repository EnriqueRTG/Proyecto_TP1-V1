<!-- Footer-->
<footer class="mt-5" id="footer-cliente">

  <div class="container">

    <section id="contenedor-lista-enlaces" class="row py-3">

      <ul class="nav col justify-content-center">
        <li class="nav-item">
          <a href="<?= site_url('garantia') ?>" class="nav-link px-3 text-uppercase">Garantia</a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('comercializacion/metodos') ?>" class="nav-link px-3 text-uppercase">Formas de Pago</a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('contacto/ubicacion') ?>" class="nav-link px-3 text-uppercase">Ubicacion</a>
        </li>
      </ul>

    </section>

    <section id="contenedor-logo-footer" class="row py-1 text-center">
      <a href="<?= base_url() ?>" class="col ">
        <img id="imagen-logotipo" src="<?php echo base_url(); ?>assets/img/logo/logo.png" class="img-fluid">
      </a>
    </section>

    <section class="row py-1 align-items-baseline">

      <section id="contenedor-copyrigth" class="col col-lg-6 col-12 order-lg-0 order-1">
        <ul class="nav justify-content-lg-start justify-content-center align-items-baseline">
          <li>
            <p class=" fs-5">Tatto Supply Store &middot; &copy; <?php echo date('Y') ?></p>
          </li>
        </ul>
      </section>

      <section id="contenedor-redes-sociales-lista-iconos" class="col col-lg-6 col-12 order-lg-1 order-0">
        <ul class="nav justify-content-lg-end justify-content-center align-items-baseline">
          <li>
            <p class=" fs-5">Seguinos en:</p>
          </li>
          <li class="nav-item icono-footer">
            <a href="#" class="nav-link px-3"><i class="bi bi-instagram"></i></a>
          </li>
          <li class="nav-item icono-footer">
            <a href="#" class="nav-link px-3"><i class="bi bi-facebook"></i></a>
          </li>
        </ul>
      </section>



    </section>

  </div>

</footer>

<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.js"></script>

</body>

</html>