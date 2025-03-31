<?php namespace App\Controllers;

use App\Models\Tabla_categorias;

class Categoria extends BaseController
{
    public function index($id_genero)
    {
        $model = new Tabla_categorias();
        $categoria = $model->get_category(['id_genero' => $id_genero]);
        
        if (!$categoria) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'categoria' => $categoria,
            'titulo_pagina' => $categoria->nombre_genero
        ];
        
        return view('portal/categoria', $data);
    }
}