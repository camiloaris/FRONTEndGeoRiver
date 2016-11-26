<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class variable
 * @package App\Models
 * @version November 15, 2016, 2:08 pm UTC
 */
class variable extends Model
{
    use SoftDeletes;

    public $table = 'variables';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nameVariable',
        'value',
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nameVariable' => 'string',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nameVariable' => 'required',
        'value' => 'required'
    ];

    
}
