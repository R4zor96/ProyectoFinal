<?php

use App\Controllers\Portal\Categoria;
?>
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
                    <a href="<?= site_url('/categoria/' . $categoria->id_genero) ?>">Categories</a>
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
            <div class="col-lg-8">
                <div class="product__page__content">
                    <div class="product__page__title">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6">
                                <div class="section-title">
                                    <h4><?= esc($categoria->nombre_genero) ?></h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="product__page__filter">
                                    <p>Order by:</p>
                                    <select>
                                        <option value="">A-Z</option>
                                        <option value="">1-10</option>
                                        <option value="">10-50</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <?php foreach ($streamings as $stream): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url(RECURSOS_STREAMINGS_IMG . '/' . $stream->caratula_streaming) ?>">
                                        <div class="ep"><?= date('H:i', strtotime($stream->duracion_streaming)) ?></div>
                                        <div class="view"><i class="fa fa-film"></i> <?= $stream->clasificacion_streaming ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><?= $stream->estatus_streaming == 1 ? 'Disponible' : 'No disponible' ?></li>
                                            <li>Película</li>
                                        </ul>
                                        <h5><a href="<?= route_to('detalle_pelicula', $stream->id_streaming) ?>"><?= esc($stream->nombre_streaming) ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="product__pagination">
                    <a href="#" class="current-page">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#"><i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
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