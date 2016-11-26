<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class travelLocation
 * @package App\Models
 * @version November 15, 2016, 3:35 am UTC
 */
class travelLocation extends Model
{
    use SoftDeletes;

    public $table = 'travel_locations';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idTravel',
        'idLocation'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idTravel' => 'integer',
        'idLocation' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idTravel' => 'required',
        'idLocation' => 'requiered'
    ];

    
}
