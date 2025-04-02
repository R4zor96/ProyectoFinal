<?php

use App\Controllers\Portal\Detalles;
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
                    <a href="<?= site_url('/detalles/' . $streaming->id_streaming) ?>">Detalles</a>
                    <span><?= esc($streaming->nombre_streaming) ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-3">
                    <div
                        class="anime__details__pic set-bg"
                        data-setbg="<?= base_url(RECURSOS_STREAMINGS_IMG . '/' . $streaming->caratula_streaming) ?>">
                        <div class="view"><i class="fa fa-film"></i> <?= esc($categoria->nombre_genero) ?></div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3><?= esc($streaming->nombre_streaming) ?></h3>
                            <span><?= esc($categoria->nombre_genero) ?></span>
                        </div>
                        <div class="anime__details__rating">
                            <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                            <span>1.029 Votes</span>
                        </div>
                        <p><?= esc($streaming->sipnosis_streaming) ?></p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Tipo:</span> <?= ($streaming->duracion_streaming) ? 'Película' : 'Serie' ?></li>
                                        <li><span>Estudio:</span> Blockbuster Originals</li>
                                        <li><span>Fecha de lanzamiento:</span> <?= date('d M, Y', strtotime($streaming->fecha_lanzamiento_streaming)) ?></li>
                                        <li><span>Estado:</span> <?= ($streaming->estatus_streaming == 1) ? 'Disponible' : 'No disponible' ?></li>
                                        <li><span>Género:</span> <?= esc($categoria->nombre_genero) ?></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Clasificación:</span> <?= esc($streaming->clasificacion_streaming) ?></li>
                                        <li><span>Rating:</span> 8.5 / 161 times</li>
                                        <?php if ($streaming->duracion_streaming): ?>
                                            <li><span>Duración:</span> <?= date('H\h i\m', strtotime($streaming->duracion_streaming)) ?></li>
                                        <?php else: ?>
                                            <li><span>Temporadas:</span> <?= $streaming->temporadas_streaming ?></li>
                                        <?php endif; ?>
                                        <li><span>Calidad:</span> HD</li>
                                        <li><span>Vistas:</span> 131,541</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="anime__details__btn">
                            <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Seguir</a>
                            <a href="<?= base_url('uploads/trailers/' . $streaming->trailer_streaming) ?>" class="watch-btn">
                                <span>Ver Ahora</span> <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Reviews</h5>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="<?= base_url(RECURSOS_PORTAL_IMG . '/anime/review-1.jpg') ?>" alt="" />
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Chris Curry - <span>1 Hour ago</span></h6>
                            <p>
                                whachikan Just noticed that someone categorized this as
                                belonging to the genre "demons" LOL
                            </p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="<?= base_url(RECURSOS_PORTAL_IMG . '/anime/review-2.jpg') ?>" alt="" />
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                            <p>Finally it came out ages ago</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="<?= base_url(RECURSOS_PORTAL_IMG . '/anime/review-3.jpg') ?>" alt="" />
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                            <p>Where is the episode 15 ? Slow update! Tch</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="<?= base_url(RECURSOS_PORTAL_IMG . '/anime/review-4.jpg') ?>" alt="" />
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Chris Curry - <span>1 Hour ago</span></h6>
                            <p>
                                whachikan Just noticed that someone categorized this as
                                belonging to the genre "demons" LOL
                            </p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="<?= base_url(RECURSOS_PORTAL_IMG . '/anime/review-5.jpg') ?>" alt="" />
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                            <p>Finally it came out ages ago</p>
                        </div>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="<?= base_url(RECURSOS_PORTAL_IMG . '/anime/review-6.jpg') ?>" alt="" />
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                            <p>Where is the episode 15 ? Slow update! Tch</p>
                        </div>
                    </div>
                </div>
                <div class="anime__details__form">
                    <div class="section-title">
                        <h5>Your Comment</h5>
                    </div>
                    <form action="#">
                        <textarea placeholder="Your Comment"></textarea>
                        <button type="submit">
                            <i class="fa fa-location-arrow"></i> Review
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="anime__details__sidebar">
                    <div class="section-title">
                        <h5>También te puede gustar...</h5>
                    </div>
                    <?php foreach ($recomendaciones as $recomendacion): ?>
                        <div class="product__sidebar__view__item set-bg"
                            data-setbg="<?= base_url(RECURSOS_STREAMINGS_IMG . '/' . $recomendacion->caratula_streaming) ?>">
                            <?php if ($recomendacion->duracion_streaming): ?>
                                <div class="ep"><?= date('H:i', strtotime($recomendacion->duracion_streaming)) ?></div>
                            <?php else: ?>
                                <div class="ep">Temp. <?= $recomendacion->temporadas_streaming ?></div>
                            <?php endif; ?>
                            <div class="view"><i class="fa fa-film"></i> <?= $recomendacion->clasificacion_streaming ?></div>
                            <h5>
                                <a href="<?= site_url('/detalles/' . $recomendacion->id_streaming) ?>">
                                    <?= esc($recomendacion->nombre_streaming) ?>
                                </a>
                            </h5>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->
<?= esc($streaming->nombre_streaming) ?>

<?= $this->endSection() ?>
<!-- RENDER CONTENT -->


<!-- RENDER js -->
<?= $this->section('js') ?>

<?= $this->endSection() ?>
<!-- RENDER js -->