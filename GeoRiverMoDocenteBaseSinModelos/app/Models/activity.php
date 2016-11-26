<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class activity
 * @package App\Models
 * @version November 15, 2016, 4:13 am UTC
 */
class activity extends Model
{
    use SoftDeletes;

    public $table = 'activities';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nameActivity',
        'nameMember',
        'coordinateActivity',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nameActivity' => 'string',
        'nameMember' => 'string',
        'coordinateActivity' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nameActivity' => 'required',
        'nameMember' => 'required',
        'coordinateActivity' => 'required',
        'password' => 'required'
    ];

    
}
