<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class location
 * @package App\Models
 * @version November 15, 2016, 3:14 pm UTC
 */
class location extends Model
{
    use SoftDeletes;

    public $table = 'locations';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nameLocation',
        'coordinate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nameLocation' => 'string',
        'coordinate' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nameLocation' => 'required',
        'coordinate' => 'required'
    ];

    
}
