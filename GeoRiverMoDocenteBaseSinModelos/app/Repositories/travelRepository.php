<?php

namespace App\Repositories;

use App\Models\travel;
use InfyOm\Generator\Common\BaseRepository;

class travelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idActivity',
        'nameTravel',
        'description',
        'course',
        'password',
        'state',
        'programme'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return travel::class;
    }
}
