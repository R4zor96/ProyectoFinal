<?php

namespace App\Models;

use CodeIgniter\Model;

class Tabla_categorias extends Model
{
    protected $table = "generos";
    protected $primaryKey = "id_genero";
    protected $useAutoIncrement = TRUE;
    protected $returnType = "object";
    protected $allowedFields = ["estatus_genero", "nombre_genero", "descripcion_genero"];

    //=============================
    //Consultas basicas
    //Create, Read, Update, Delete
    //=============================

    public function create_data($data)
    {
        if (!empty($data)) {
            return $this
                ->table($this->table)
                ->insert($data);
        } else {
            return FALSE;
        }
    } //end create_data

    public function get_category($contraints = array())
    {
        return $this
            ->table($this->table)
            ->where($contraints)
            ->get()
            ->getRow();
    } //end get_category

    public function get_genero_by_id($id_genero)
    {
        return $this
            ->table($this->table)
            ->where('id_genero', $id_genero)
            ->get()
            ->getRow();
    } // end get_genero_by_id
    

    public function get_table()
    {
        return $this
            ->table($this->table)
            ->get()
            ->getResult();
    } //end get_table

    public function update_data($id = 0, $data = array())
    {
        if (!empty($data)) {
            return $this
                ->table($this->table)
                ->where([$this->primaryKey => $id])
                ->set($data)
                ->update();
        } else {
            return FALSE;
        }
    } //end update_data

    public function delete_data($id = 0)
    {
        if (!empty($id)) {
            return $this
                ->table($this->table)
                ->where([$this->primaryKey => $id])
                ->delete();
        } else {
            return FALSE;
        }
    }

    /**
     * Obtiene categorías habilitadas para menús
     */
    public function get_categorias_menu()
    {
        return $this->where('estatus_genero', 1)
            ->orderBy('nombre_genero', 'ASC')
            ->findAll();
    }

    /**
     * Verifica si una categoría existe y está habilitada
     */
    public function categoria_habilitada($id_genero)
    {
        return $this->where([
            'id_genero' => $id_genero,
            'estatus_genero' => 1
        ])->countAllResults() > 0;
    }
}//end Tabla_categorias