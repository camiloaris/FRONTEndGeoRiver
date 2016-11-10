<?php

namespace App\Repositories;

use App\Models\variableCuantitativa;
use InfyOm\Generator\Common\BaseRepository;

class variableCuantitativaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'latitud',
        'longitud',
        'valor',
        'estandar'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return variableCuantitativa::class;
    }
}
