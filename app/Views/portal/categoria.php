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
                <?php foreach ($peliculas as $pelicula): ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url(RECURSOS_STREAMINGS_IMG . '/' . $pelicula->caratula_streaming) ?>">
                                <div class="ep"><?= date('H:i', strtotime($pelicula->duracion_streaming)) ?></div>
                                <div class="view"><i class="fa fa-eye"></i> <?= $pelicula->clasificacion_streaming ?></div>
                            </div>
                            <div class="product__item__text">
                                <ul>
                                    <li><?= $pelicula->estatus_streaming == 1 ? 'Disponible' : 'No disponible' ?></li>
                                    <li>Película</li>
                                </ul>
                                <h5><a href="<?= route_to('detalle_pelicula', $pelicula->id_streaming) ?>"><?= esc($pelicula->nombre_streaming) ?></a></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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