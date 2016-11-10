<?php

namespace App\Repositories;

use App\Models\variableCualitativa;
use InfyOm\Generator\Common\BaseRepository;

class variableCualitativaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'valor',
        'latitud',
        'longitud',
        'estandar'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return variableCualitativa::class;
    }
}
