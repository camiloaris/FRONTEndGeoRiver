<?php

namespace App\Repositories;

use App\Models\proyecto;
use InfyOm\Generator\Common\BaseRepository;

class proyectoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'variable'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return proyecto::class;
    }
}
