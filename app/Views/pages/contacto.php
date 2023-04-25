<!-- Sección de contacto -->
<div class="card1 container-fluid">
    <h5 class="card-title text-uppercase texto">Contacto</h5>
</div>
<!-- Formulario e Informacion-->
<section class="container card mx-auto">
    <!-- Descripcion-->
    <div class="row">
        <div class="col">
            <p class="card fs-5 p-3">
                Ante la necesidad de cualquier información por algun de nuestros articulos o cualquier comentario que
                nos permita mejorar el servicio, no dudes en hacernos llegar tu mensaje por medio de algunos de nuestros
                canales de comunicación. Estamos atentos a lo que tengas para decirnos!
            </p>
        </div>
    </div>
    <!-- Formulario e informacion -->
    <div class="row justify-content-between mt-4">
        <!-- Formulario-->
        <div class="col col-lg-6 col-md-6 col-12 order-lg-0 order-md-0 order-1">
            <!-- Título del formulario de contacto -->
            <h5 class="text-center my-3 etiqueta text-uppercase">
                <i class="bi bi-envelope-paper h4"></i>
                Formulario de Contacto
            </h5>
            <div class="container mb-4">
                <div class="row mx-2">
                    <!-- Campo de ingreso de correo electrónico -->
                    <form method="POST" action="<?php echo base_url(route_to("contacto_C")) ?>">
                        <fieldset>
                            <div class="form-group">
                                <label for="cont_Email" class="form-label">
                                    <i class="bi bi-envelope-at"></i>
                                    Correo Electrónico:
                                </label>
                                <input type="email" name="cont_Email" class="form-control" id="cont_Email" aria-describedby="emailHelp" placeholder="Ingrese su Correo electrónico">
                            </div>
                            <!-- Nombre -->
                            <div class="form-group">
                                <label for="cont_Nombre" class="form-label mt-4 beige">
                                    <i class="bi bi-person-vcard"></i>
                                    Nombre:
                                </label>
                                <input type="text" name="cont_Nombre" class="form-control" id="cont_Nombre" placeholder="Ingrese su Nombre">
                            </div>
                            <!-- Apellido -->
                            <div class="form-group">
                                <label for="cont_Apellido" class="form-label mt-4 beige">
                                    <i class="bi bi-person-vcard-fill"></i>
                                    Apellido:
                                </label>
                                <input type="text" name="cont_Apellido" class="form-control" id="cont_Apellido" placeholder="Ingrese su Apellido">
                            </div>
                            <!-- Asunto -->
                            <div class="form-group">
                                <label for="cont_Asunto" class="form-label mt-4 beige">
                                    <i class="bi bi-card-checklist"></i>
                                    Asunto:
                                </label>
                                <input type="text" name="cont_Asunto" class="form-control" id="cont_Asunto" placeholder="Ingresar Asunto">
                            </div>
                            <!-- Area de texto para los comentarios -->
                            <div class="form-group">
                                <label for="cont_Mensaje" class="form-label mt-4 beige">
                                    <i class="bi bi-file-text"></i>
                                    Mensaje:
                                </label>
                                <textarea class="form-control" name="cont_Mensaje" id="cont_Mensaje" rows="3"></textarea>
                            </div>
                            <div class=" text-center">
                                <button type="submit" class="btn btn-outline-warning btn-lg mt-4">
                                    <i class="bi bi-send"></i>
                                    Enviar
                                </button>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- Informacion -->
        <div class="col col-lg-6 col-md-6 col-12 order-lg-1 order-md-1 order-0">
            <h5 class="text-center my-3 etiqueta text-uppercase">
                <i class="bi bi-info-square h4"></i>
                Información
            </h5>
            <div class="mx-4">
                <hr class="mb-4">
                <!-- Titulas -->
                <h6 class="">
                    Propietarios:
                </h6>
                <i class="bi bi-people-fill"></i>
                Juan Carlos Pastore y Romina Sol Almada
                <hr class="mb-4">
                <!--Datos de ubicación -->
                <h6 class="">
                    Nuestra ubicación:
                </h6>
                <div>
                    <p class="fw-bold">
                        <!-- Ubicación -->
                        <i class="bi bi-geo-alt-fill"></i>
                        Mendoza 1194.
                    </p>
                </div>
                <hr>
                <h6 class="">
                    Medios de comunicación:
                </h6>
                <!-- Teléfono -->
                <div>
                    <p class="fw-bold">
                        <!-- Teléfono -->
                        <i class="bi bi-whatsapp"></i>
                        (+54) 379 440-6775
                    </p>
                </div>
                <!-- Correo electrónico -->
                <div>
                    <p class="fw-bold">
                        <!-- Email -->
                        <i class="bi bi-envelope-at-fill"></i>
                        TattooSupplyStoreOk@gmail.com
                    </p>
                </div>

                <!-- Horario de atención (IMG)-->
                <div class=" text-center">
                    <hr class="mb-4">
                    <!-- Horarios -->
                    <div class=" d-flex">
                        <i class="bi bi-clock-fill m-1"></i>
                        <p class="m-1">Horarios</p>
                    </div>
                    <img src="<?php echo base_url("assets/img/contacto/horarios.png") ?>" class="img-fluid mb-4 mt-2">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="card1 container-fluid">
    <h5 class="card-title text-uppercase texto">
        <i class="bi bi-shop"></i>
        Visita nuestro local
    </h5>
</div>
<!-- Iframe de la ubicacion -->
<section class="container mt-2">
    <div class="embed-responsive embed-responsive-16by9 shadow p-3 mb-5 bg-white rounded">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d303.9827267431783!2d-58.83574120545759!3d-27.470911618713988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ca235e1fb8f%3A0x9bdef32943f1a9c!2sCCO%2C%20Mendoza%201194%2C%20W3400%20Corrientes!5e0!3m2!1ses!2sar!4v1682285923762!5m2!1ses!2sar" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
</section>