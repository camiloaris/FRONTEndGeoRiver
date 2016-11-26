<?php

namespace App\Repositories;

use App\Models\activityVariable;
use InfyOm\Generator\Common\BaseRepository;

class activityVariableRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_activity',
        'idVariable'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return activityVariable::class;
    }
}
