<?php

namespace App\Repositories;

use App\Models\salida;
use InfyOm\Generator\Common\BaseRepository;

class salidaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'programa',
        'asignatura',
        'salida',
        'fechaInicio',
        'fechaFin',
        'semestre',
        'password'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return salida::class;
    }
}
