<!-- Section: Design Block -->
<section class="text-center text-lg-start">

    <!-- Jumbotron -->
    <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                    <div class="card-body p-5 shadow-5 text-center">
                        <h2 class="fw-bold mb-5">Crear Cuenta</h2>
                        <form method="POST" action="<?php echo base_url('/registro') ?>">
                            <?= csrf_field() ?>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="nombre" class="form-control" name="nombre" required />
                                        <label class="form-label" for="nombre">Nombre/s</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="apellido" class="form-control" name="apellido" required/>
                                        <label class="form-label" for="apellido">Apellido/s</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="correo" class="form-control" name="correo" />
                                <label class="form-label" for="correo">Direccion de correo</label>
                            </div>

                            <!-- Usuario input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="usuario" class="form-control" name="usuario" />
                                <label class="form-label" for="usuario">Usuario</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="password" class="form-control" name="password" />
                                <label class="form-label" for="password">Contraseña</label>
                            </div>

                            <!-- Confirmd Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="confirmar_password" class="form-control" name="confirmar_password" />
                                <label class="form-label" for="confirmar_password">Repetir Contraseña</label>
                            </div>

                            <!-- Terminos input -->
                            <div class="form-check mb-5">
                                <input class="form-check-input ms-5" type="checkbox" value="" id="terminos" name="terminos">
                                <label class="form-check-label me-5" for="terminos">
                                    Acepto <a class="text-white" href="<?php echo base_url('terminos'); ?>" target="_blank">Terminos y Condiciones</a>
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Resgistrar
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4" alt="" />
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->