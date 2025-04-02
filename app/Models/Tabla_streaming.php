<?php

namespace App\Models;

use CodeIgniter\Model;

class Tabla_streaming extends Model
{
    protected $table = "streaming";
    protected $primaryKey = "id_streaming";
    protected $useAutoIncrement = true;
    protected $returnType = "object";
    protected $allowedFields = [
        "id_streaming",
        "estatus_streaming",
        "nombre_streaming",
        "fecha_lanzamiento_streaming",
        "duracion_streaming",
        "temporadas_streaming",
        "caratula_streaming",
        "trailer_streaming",
        "clasificacion_streaming",
        "sipnosis_streaming",
        "fecha_estreno_streaming",
        "id_genero"
    ];

    // =============================
    // Métodos CRUD básicos
    // =============================

    public function create_data($data)
    {
        if (!empty($data)) {
            return $this->insert($data);
        }
        return false;
    }

    public function get_top_streamings($limit = 6)
    {
        // Asegúrate de estar usando el builder correctamente
        $builder = $this->builder(); // Obtener el builder de la tabla correspondiente

        // Aplicar orden y limitación
        $resultados = $builder->orderBy('fecha_estreno_streaming', 'DESC')
            ->limit($limit)
            ->get() // Ejecutar la consulta
            ->getResult();

        // Filtros para asignar aleatoriamente
        $filtros = ['day', 'week', 'month', 'years'];

        // Modificar los resultados antes de retornarlos
        foreach ($resultados as $item) {
            $item->filtro_aleatorio = $filtros[array_rand($filtros)];
            $item->tipo_duracion = ($item->duracion_streaming) ? 'Película' : 'Serie';
        }

        return $resultados;
    }


    public function get_all_streaming_by_gen($id_genero, $limit = null)
    {
        $builder = $this->where('id_genero', $id_genero)
            ->where('estatus_streaming', 1);

        if ($limit) {
            $builder->limit($limit);
        }

        return $builder->findAll();
    }

    public function get_streaming($id)
    {
        return $this->find($id);
    }

    public function get_table($include_genre = false)
    {
        $builder = $this->builder();
        if ($include_genre) {
            $builder->select('streaming.*, generos.nombre_genero')
                ->join('generos', 'streaming.id_genero = generos.id_genero');
        }
        return $builder->get()->getResult();
    }

    public function update_data($id, $data)
    {
        return $this->update($id, $data);
    }

    public function delete_data($id)
    {
        return $this->delete($id);
    }

    // =============================
    // Métodos específicos para Películas
    // =============================

    public function get_peliculas($limit = null)
    {
        $builder = $this->where('duracion_streaming IS NOT NULL')
            ->where('temporadas_streaming IS NULL')
            ->where('estatus_streaming', 1);

        if ($limit) {
            $builder->limit($limit);
        }

        return $builder->findAll();
    }

    public function get_latest_peliculas($limit = 5)
    {
        return $this->where('duracion_streaming IS NOT NULL')
            ->where('temporadas_streaming IS NULL')
            ->where('estatus_streaming', 1)
            ->orderBy('fecha_estreno_streaming', 'DESC')
            ->limit($limit)
            ->findAll();
    }

    public function get_peliculas_by_genre($id_genero, $limit = null)
    {
        $builder = $this->where('id_genero', $id_genero)
            ->where('duracion_streaming IS NOT NULL')
            ->where('temporadas_streaming IS NULL')
            ->where('estatus_streaming', 1);

        if ($limit) {
            $builder->limit($limit);
        }

        return $builder->findAll();
    }

    public function get_peliculas_ordenadas($limit = null)
    {
        $builder = $this->builder();

        $builder->where('duracion_streaming IS NOT NULL')
            ->where('temporadas_streaming IS NULL')
            ->where('estatus_streaming', 1)
            ->orderBy('nombre_streaming', 'ASC');

        if ($limit !== null) {
            $builder->limit($limit);
        }

        return $builder->get()->getResult();
    }


    // =============================
    // Métodos específicos para Series
    // =============================

    public function get_series($limit = null)
    {
        $builder = $this->where('temporadas_streaming IS NOT NULL')
            ->where('duracion_streaming IS NULL')
            ->where('estatus_streaming', 1);

        if ($limit) {
            $builder->limit($limit);
        }

        return $builder->findAll();
    }

    public function get_series_ordenadas($limit = null)
    {
        $builder = $this->builder();

        $builder->where('temporadas_streaming IS NOT NULL')
            ->where('duracion_streaming IS NULL')
            ->where('estatus_streaming', 1)
            ->orderBy('nombre_streaming', 'ASC');

        if ($limit !== null) {
            $builder->limit($limit);
        }

        return $builder->get()->getResult();
    }


    public function get_latest_series($limit = 5)
    {
        return $this->where('temporadas_streaming IS NOT NULL')
            ->where('duracion_streaming IS NULL')
            ->where('estatus_streaming', 1)
            ->orderBy('fecha_estreno_streaming', 'DESC')
            ->limit($limit)
            ->findAll();
    }

    public function get_series_by_genre($id_genero, $limit = null)
    {
        $builder = $this->where('id_genero', $id_genero)
            ->where('temporadas_streaming IS NOT NULL')
            ->where('duracion_streaming IS NULL')
            ->where('estatus_streaming', 1);

        if ($limit) {
            $builder->limit($limit);
        }

        return $builder->findAll();
    }

    // =============================
    // Métodos generales
    // =============================

    public function search_content($term, $type = null)
    {
        $builder = $this->groupStart()
            ->like('nombre_streaming', $term)
            ->orLike('sipnosis_streaming', $term)
            ->groupEnd()
            ->where('estatus_streaming', 1);

        if ($type === 'pelicula') {
            $builder->where('duracion_streaming IS NOT NULL')
                ->where('temporadas_streaming IS NULL');
        } elseif ($type === 'serie') {
            $builder->where('temporadas_streaming IS NOT NULL')
                ->where('duracion_streaming IS NULL');
        }

        return $builder->findAll();
    }

    public function get_featured_content($limit = 8)
    {
        // Obtiene 4 películas y 4 series destacadas
        $peliculas = $this->get_latest_peliculas(4);
        $series = $this->get_latest_series(4);

        return array_merge($peliculas, $series);
    }

    public function get_content_by_type($id, $type)
    {
        if ($type === 'pelicula') {
            return $this->where('id_streaming', $id)
                ->where('duracion_streaming IS NOT NULL')
                ->where('temporadas_streaming IS NULL')
                ->first();
        } elseif ($type === 'serie') {
            return $this->where('id_streaming', $id)
                ->where('temporadas_streaming IS NOT NULL')
                ->where('duracion_streaming IS NULL')
                ->first();
        }
        return null;
    }
}
