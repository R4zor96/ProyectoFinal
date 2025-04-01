<?php
namespace App\Controllers\Portal;

use App\Controllers\BaseController;

class Home extends BaseController
{
    private $view = 'portal/home';
    private $session = null;

    public function __construct()
    {
        //instanciamos la variable de sesion
        $this->session = session();
    }
    
    private function load_data()
{
    $tablaStreaming = new \App\Models\Tabla_streaming();
    helper('message');
    $data = array();

    $data['peliculas'] = $tablaStreaming->get_peliculas_ordenadas(6); // 6 películas   
    $data['series'] = $tablaStreaming->get_series_ordenadas(6); // 6 series 
    $data['nombre_pagina'] = 'Home';
    $data['titulo_pagina'] = 'Home';

    // Verificar y asignar valores de sesión de manera segura
    $data["nombre_completo_usuario"] = $this->session->get('nombre_completo') ?? 'Invitado';
    $data["nombre_usuario"] = $this->session->get('nickname') ?? 'Invitado';
    $data["email_usuario"] = $this->session->get('correo') ?? '';

    return $data;
}

    private function create_view($name_view = '', $content = array())
    {
        //$content["menu_lateral"] = crear_menu_panel($this->session->tarea_actual, $this->session->rol_actual);
        return view($name_view, $content);
    } //end make_view

    //Main function : index
    public function index()
    {
        return $this->create_view($this->view, $this->load_data());
    } // end index

    
}
