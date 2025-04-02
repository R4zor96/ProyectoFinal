<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url(RECURSOS_PORTAL_CSS . '/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url(RECURSOS_PORTAL_CSS . '/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url(RECURSOS_PORTAL_CSS . '/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url(RECURSOS_PORTAL_CSS . '/plyr.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url(RECURSOS_PORTAL_CSS . '/nice-select.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url(RECURSOS_PORTAL_CSS . '/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url(RECURSOS_PORTAL_CSS . '/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url(RECURSOS_PORTAL_CSS . '/style.css') ?>" type="text/css">
    <?= $this->renderSection('css') ?>
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-2 mb-1 mt-1">
                    <img src="<?= base_url(RECURSOS_PORTAL_IMG . '/blockbuster_logo.png') ?>" alt="" style="width: 55%;">
                </div>
                <div class="col-lg-7">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="<?= site_url('/') ?>">homepage</a></li>
                                <li><a href="#">Categorias <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <!-- En tu código HTML donde va el menú -->
                                        <?= generar_menu_categorias() ?>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="header__right">
                        <?php if ($nombre_usuario != 'Invitado'): ?>
                            <!-- Usuario logueado - Mostrar enlace a perfil o dashboard -->
                            <a href="<?= route_to('perfil') ?>" title="<?= esc($nombre_completo_usuario) ?>">
                                <span class="icon_profile"></span>
                                <span class="d-none d-sm-inline"><?= esc($nombre_usuario) ?></span>
                            </a>
                            <a href="<?= route_to('salir') ?>" title="Salir">
                                <i class="bi bi-box-arrow-right"></i>
                                <span class="d-none d-sm-inline"></span>
                            </a>

                        <?php else: ?>
                            <!-- Usuario no logueado - Mostrar enlace a login -->
                            <a href="<?= route_to('inicio') ?>" title="Iniciar sesión">
                                <span class="icon_profile"></span>
                                <span class="d-none d-sm-inline">Iniciar sesión</span>
                            </a>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!--****************IMPORTAR CONTENT****************-->
    <?= $this->renderSection('content') ?>
    <!--****************IMPORTAR CONTENT****************-->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="<?= base_url(RECURSOS_PORTAL_IMG . '/blockbuster_logo.png') ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="<?= base_url(RECURSOS_PORTAL_JS . '/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_JS . '/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_JS . '/player.js') ?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_JS . '/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_JS . '/mixitup.min.js') ?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_JS . '/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_JS . '/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_JS . '/main.js') ?>"></script>

    <?= $this->renderSection('content') ?>
</body>

</html>