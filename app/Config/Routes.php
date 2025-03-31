<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 * // Get all specifics values or value specific
 * $routes->get('new_route','Controller::method', ['as' => 'identifier']);
 * 
 * // Body Request - Send data
 * $routes->post('','', ['as' => '']);
 * 
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::example');

//RUTAS PORTAL
$routes->get('/', 'Portal/Home::index');
$routes->get('categoria/(:num)', 'Categoria::index/$1');

//RUTAS SESSION
$routes->get('/inicio', 'Usuario/InicioSesion::index', ['as'=> 'inicio']);
$routes->get('/dashboard', 'Panel/Dashboard::index', ['as'=> 'dashboard']);

$routes->post('/iniciar_sesion', 'Usuario/InicioSesion::iniciar_sesion');
$routes->get('/salir', 'Usuario/Logout::index', ['as'=> 'salir']);

//RUTAS DASHBOARD
$routes->get('/usuarios', 'Panel/Usuarios::index', ['as'=> 'usuarios']);
$routes->get('/usuario_nuevo', 'Panel/Usuario_nuevo::index', ['as'=> 'usuario_nuevo']);
$routes->post('/registrar_usuario', 'Panel/Usuario_nuevo::registrar', ['as'=> 'registrar_usuario']);
$routes->get('/detalles_usuario/(:num)', 'Panel\Usuario_detalles::index/$1', ['as'=> 'detalles_usuario']);
$routes->post('editar_usuario/(:num)', 'Panel\Usuario_detalles::actualizar/$1', ['as'=> 'editar_usuario']);
$routes->get('estatus_usuario/(:num)/(:num)', 'Panel\Usuarios::estatus/$1/$2', ['as'=> 'estatus_usuario']);
$routes->get('eliminar_usuario/(:num)', 'Panel\Usuarios::eliminar/$1', ['as'=> 'eliminar_usuario']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
