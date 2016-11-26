<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class activityVariable
 * @package App\Models
 * @version November 15, 2016, 4:06 am UTC
 */
class activityVariable extends Model
{
    use SoftDeletes;

    public $table = 'activity_variables';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_activity',
        'idVariable'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_activity' => 'integer',
        'idVariable' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_activity' => 'required',
        'idVariable' => 'required'
    ];

    
}
