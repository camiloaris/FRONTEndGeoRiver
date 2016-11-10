<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class variableCualitativa
 * @package App\Models
 * @version November 10, 2016, 8:33 pm UTC
 */
class variableCualitativa extends Model
{
    use SoftDeletes;

    public $table = 'variable_cualitativas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'valor',
        'latitud',
        'longitud',
        'estandar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'valor' => 'string',
        'latitud' => 'integer',
        'longitud' => 'integer',
        'estandar' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'valor' => 'required',
        'latitud' => 'required',
        'longitud' => 'required',
        'estandar' => 'required'
    ];

    
}
