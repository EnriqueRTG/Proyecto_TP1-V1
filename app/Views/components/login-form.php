<!-- Modal de inicio de sesión -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de inicio de sesión -->
                <div class="vh-100 gradient-custom">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                    <div class="card-body p-5 text-center">

                                        <div class="mb-md-5 mt-md-4 pb-5">

                                            <h2 class="fw-bold mb-2 text-uppercase">Ingreso</h2>
                                            <p class="text-white-50 mb-5">Por favor ingrese su Usuario y Contraseña</p>

                                            <form action="<?php echo base_url('/ingreso') ?>" method="POST">
                                                <div class="form-outline form-white mb-4">
                                                    <input type="email" id="typeEmailX" class="form-control form-control-lg" required="" />
                                                    <label class="form-label" for="typeEmailX">Usuario</label>
                                                </div>

                                                <div class="form-outline form-white mb-4">
                                                    <input type="password" id="typePasswordX" class="form-control form-control-lg" required="" />
                                                    <label class="form-label" for="typePasswordX">Contraseña</label>
                                                </div>

                                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="<?php echo base_url('/recuperacion'); ?>">Olvido su contraseña?</a></p>

                                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Ingresar</button>
                                            </form>


                                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                                <a href="#!" class="text-white"><i class="bi bi-facebook mx-3" style="font-size: 2rem"></i></a>
                                                <a href="#!" class="text-white"><i class="bi bi-google mx-3" style="font-size: 2rem"></i></a>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="mb-0">No posee una cuenta? <a href="<?php echo base_url('registro') ?>" class="text-white-50 fw-bold">Registrar</a>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>