    <!-- IMPORTAR LA PLANTILLA -->
    <?= $this->extend('plantillas/portal_base') ?>

    <!-- RENDER css -->
    <?= $this->section('css') ?>


    <?= $this->endSection() ?>
    <!-- RENDER css -->

    <!-- RENDER CONTENT -->
    <?= $this->section('content') ?>

    <!-- Breadcrumb -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?= site_url('/') ?>"><i class="fa fa-home"></i> Home</a>
                        <span><?= esc($categoria->nombre_genero) ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4><?= esc($categoria->nombre_genero) ?></h4>
                        <?php if (!empty($categoria->descripcion_genero) && $categoria->descripcion_genero != 'Sin descripción...'): ?>
                            <p class="categoria-descripcion"><?= esc($categoria->descripcion_genero) ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Aquí iría el contenido específico de la categoría -->
            <div class="row" id="contenido-categoria">
                <!-- Los items se pueden cargar via AJAX o directamente desde el controlador -->
            </div>
        </div>
    </section>

    <?= $this->endSection() ?>
    <!-- RENDER CONTENT -->


    <!-- RENDER js -->
    <?= $this->section('js') ?>

    <script>
        // Puedes agregar JS específico para la página de categoría
        $(document).ready(function() {
            // Ejemplo: Cargar contenido dinámico
            const categoriaId = <?= $categoria->id_genero ?>;

            // Aquí podrías hacer una llamada AJAX para cargar los items de la categoría
            /*
            $.get(`/api/categoria/${categoriaId}/items`, function(data) {
                $('#contenido-categoria').html(data);
            });
            */
        });
    </script>
    <?= $this->endSection() ?>
    <!-- RENDER js -->