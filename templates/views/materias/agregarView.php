<?php require_once INCLUDES . 'inc_header.php'; ?>

<div class="row">
    <div class="col-xl-6">

        <!-- Default Card -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Completa el formulario</h5>
                <form action="materias/post_agregar" method="post">
                    <?php echo insert_inputs(); ?>
                    <div class="form-group">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" aria-describedby="helpId" required>
                        <small id="helpIdnombre" class="text-muted">Digita el nombre de la materia</small>
                    </div>
                    <div class="form-group">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="10"></textarea>
                        <small id="helpIddescripcion" class="text-muted">Digita la descripción de la materia</small>
                    </div>

                    <button type="submit" class="btn btn-success">Guardar registro</button>

                </form>
            </div>
        </div><!-- End Default Card -->

    </div>
</div>

<?php require_once INCLUDES . 'inc_footer.php'; ?>