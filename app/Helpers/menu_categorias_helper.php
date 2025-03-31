<?php

use App\Models\Tabla_categorias;

function generar_menu_categorias()
{
    $model = new Tabla_categorias();

    // Obtener solo categorías habilitadas (estatus_genero = 1)
    $categorias = $model->where('estatus_genero', 1)->findAll();

    $html = '';

    foreach ($categorias as $categoria) {
        $html .= '<li><a href="' . site_url('categoria/' . $categoria->id_genero) . '">' .
            htmlspecialchars($categoria->nombre_genero, ENT_QUOTES, 'UTF-8') . '</a></li>';
    }

    return $html;
}
