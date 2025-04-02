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
                    <span>Home</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="<?= base_url(RECURSOS_PORTAL_IMG . '/hero/hero-1.jpg') ?>">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="<?= base_url(RECURSOS_PORTAL_IMG . '/hero/hero-1.jpg') ?>">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="<?= base_url(RECURSOS_PORTAL_IMG . '/hero/hero-1.jpg') ?>">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">Adventure</div>
                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                            <p>After 30 days of travel across the world...</p>
                            <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Películas</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="<?= route_to('todas_peliculas') ?>" class="primary-btn">Ver Todas <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($peliculas as $pelicula): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                <div class="product__item">
                                    <a href="<?= site_url('/detalles/' . $pelicula->id_streaming) ?>">
                                        <div class="product__item__pic set-bg" data-setbg="<?= base_url(RECURSOS_STREAMINGS_IMG . '/' . $pelicula->caratula_streaming) ?>">
                                            <div class="ep"><?= date('H:i', strtotime($pelicula->duracion_streaming)) ?></div>
                                            <div class="view"><i class="fa fa-film"></i> <?= $pelicula->clasificacion_streaming ?></div>
                                        </div>
                                    </a>

                                    <div class="product__item__text">
                                        <ul>
                                            <li><?= $pelicula->estatus_streaming == 1 ? 'Disponible' : 'No disponible' ?></li>
                                            <li>Película</li>
                                        </ul>
                                        <h5><a href="<?= site_url('/detalles/' . $pelicula->id_streaming) ?>"><?= esc($pelicula->nombre_streaming) ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Series</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="<?= route_to('todas_series') ?>" class="primary-btn">Ver Todas <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($series as $serie): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                <div class="product__item">
                                <a href="<?= site_url('/detalles/' . $serie->id_streaming) ?>">
                                        <div class="product__item__pic set-bg" data-setbg="<?= base_url(RECURSOS_STREAMINGS_IMG . '/' . $serie->caratula_streaming) ?>">
                                            <div class="ep"><?= date('H:i', strtotime($serie->duracion_streaming)) ?></div>
                                            <div class="view"><i class="fa fa-film"></i> <?= $serie->clasificacion_streaming ?></div>
                                        </div>
                                    </a>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><?= $serie->estatus_streaming == 1 ? 'Disponible' : 'No disponible' ?></li>
                                            <li>Serie</li>
                                        </ul>
                                        <h5><a href="<?= site_url('/detalles/' . $serie->id_streaming) ?>"><?= esc($serie->nombre_streaming) ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
                    <div class="product__sidebar__view">
                        <div class="section-title">
                            <h5>Top Streamings</h5>
                        </div>
                        <ul class="filter__controls">
                            <li class="active" data-filter="*">Todos</li>
                            <li data-filter=".day">Día</li>
                            <li data-filter=".week">Semana</li>
                            <li data-filter=".month">Mes</li>
                            <li data-filter=".years">Año</li>
                        </ul>
                        <div class="filter__gallery">
                            <?php foreach ($top_streamings as $streaming): ?>
                                <div class="product__sidebar__view__item set-bg mix <?= $streaming->filtro_aleatorio ?>"
                                    data-setbg="<?= base_url(RECURSOS_STREAMINGS_IMG . '/' . $streaming->caratula_streaming) ?>">
                                    <?php if ($streaming->tipo_duracion == 'Película'): ?>
                                        <div class="ep"><?= date('H:i', strtotime($streaming->duracion_streaming)) ?></div>
                                    <?php else: ?>
                                        <div class="ep">Temporadas: <?= $streaming->temporadas_streaming ?></div>
                                    <?php endif; ?>
                                    <div class="view">
                                        <i class="fa fa-film"></i> <?= $streaming->clasificacion_streaming ?>
                                    </div>
                                    <h5>
                                        <a href="<?= site_url('/detalles/' . $streaming->id_streaming) ?>">
                                            <?= esc($streaming->nombre_streaming) ?>
                                        </a>
                                    </h5>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->


<?= $this->endSection() ?>
<!-- RENDER CONTENT -->


<!-- RENDER js -->
<?= $this->section('js') ?>

<?= $this->endSection() ?>
<!-- RENDER js -->