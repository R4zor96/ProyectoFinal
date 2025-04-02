<?php

namespace App\Controllers\Portal;

use App\Controllers\BaseController;

class Detalles extends BaseController
{
    private $view = 'portal/detalles';
    private $session = null;

    public function __construct()
    {
        //instanciamos la variable de sesion
        $this->session = session();
    }

    public function load_data($id_streaming)
    {
        $tablaStreaming = new \App\Models\Tabla_streaming();
        $tablaCategoria = new \App\Models\Tabla_categorias();

        helper('message');
        $data = array();

        $data['streaming'] = $tablaStreaming->get_streaming($id_streaming);
        $data['categoria'] = $tablaCategoria->get_genero_by_id($data['streaming']->id_genero);

        // Obtener recomendaciones (mismo género, excluyendo el actual)
        $data['recomendaciones'] = $tablaStreaming->get_recomendaciones($data['streaming']->id_genero, $data['streaming']->id_streaming, 4);

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
    public function index($id_streaming)
    {
        return $this->create_view($this->view, $this->load_data($id_streaming));
    } // end index


}
