<?php require_once INCLUDES . 'inc_header_minimal.php'; ?>

<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="assets/img/logo.png" alt="">
                            <span class="d-none d-lg-block">NiceAdmin</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <!-- Ingresa a tu cuenta -->
                                <h5 class="card-title text-center pb-0 fs-4">
                                    <?php echo sprintf('¡Bienvenido a %s!', get_sitename()) ?></h5>
                                <!-- Ingresa tu nombre de usuario y contraseña para iniciar sesión -->
                                <p class="text-center small">Ingresa tu usuario y contraseña para iniciar
                                    sesión</p>
                            </div>
                            <?php echo Flasher::flash(); ?>
                            <form class="row g-3 needs-validation" action="login/post_login" method="post" novalidate>
                                <?php echo insert_inputs(); ?>
                                <div class="col-12">
                                    <label for="usuario" class="form-label">Usuario</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" name="usuario" class="form-control" id="usuario" required>
                                        <div class="invalid-feedback">Ingresa tu usuario.</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                    <div class="invalid-feedback">Ingresa tu contraseña!</div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" value="true"
                                            id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Recordar</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Ingresar</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">¿Olvidaste tu contraseña? <a
                                            href="pages-register.html">Recordarla</a></p>
                                </div>
                            </form>

                        </div>
                    </div>



                </div>
            </div>
        </div>

    </section>

</div>

<?php require_once INCLUDES . 'inc_footer_minimal.php'; ?>