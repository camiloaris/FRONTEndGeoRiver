<?php

namespace App\Repositories;

use App\Models\activityUser;
use InfyOm\Generator\Common\BaseRepository;

class activityUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idActivity',
        'idUser'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return activityUser::class;
    }
}
