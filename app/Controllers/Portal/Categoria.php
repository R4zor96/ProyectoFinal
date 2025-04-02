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
        $tablaCategoria = new \App\Models\Tabla_categorias();

        helper('message');
        $data = array();

        $data['streamings'] = $tablaStreaming->get_all_streaming_by_gen($id_genero);
        $data['categoria'] = $tablaCategoria->get_genero_by_id($id_genero);

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
