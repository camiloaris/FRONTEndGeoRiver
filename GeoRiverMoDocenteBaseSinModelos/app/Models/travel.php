<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class travel
 * @package App\Models
 * @version November 15, 2016, 3:56 am UTC
 */
class travel extends Model
{
    use SoftDeletes;

    public $table = 'travels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idActivity',
        'nameTravel',
        'description',
        'course',
        'password',
        'state',
        'programme'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idActivity' => 'integer',
        'nameTravel' => 'string',
        'description' => 'string',
        'course' => 'string',
        'password' => 'string',
        'state' => 'string',
        'programme' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idActivity' => 'required',
        'nameTravel' => 'required',
        'description' => 'required',
        'course' => 'required',
        'password' => 'required',
        'state' => 'required',
        'programme' => 'required'
    ];

    
}
