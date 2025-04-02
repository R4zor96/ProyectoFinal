<?php

namespace App\Controllers\Portal;

use App\Controllers\BaseController;

class Categoria extends BaseController
{
    private $view = 'portal/categoria';
    private $session = null;

    public function __construct()
    {
        //instanciamos la variable de sesion
        $this->session = session();
    }

    public function load_data($id_genero)
    {
        $tablaStreaming = new \App\Models\Tabla_streaming();
        $tablaGeneros = new \App\Models\Tabla_categorias(); // Asumiendo que tienes este modelo

        helper('message');
        $data = array();

        // Obtener información del género
        $data['categoria'] = $tablaGeneros->find($id_genero);

        // Obtener contenido por género
        $data['peliculas'] = $tablaStreaming->where('id_genero', $id_genero)
            ->where('duracion_streaming IS NOT NULL')
            ->where('estatus_streaming', 1)
            ->findAll();

        $data['series'] = $tablaStreaming->where('id_genero', $id_genero)
            ->where('temporadas_streaming IS NOT NULL')
            ->where('estatus_streaming', 1)
            ->findAll();

        // Datos de usuario
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
    public function index($id_genero)
    {
        return $this->create_view($this->view, $this->load_data($id_genero));
    } // end index


}
