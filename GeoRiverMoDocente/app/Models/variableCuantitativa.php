<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class variableCuantitativa
 * @package App\Models
 * @version November 10, 2016, 8:21 pm UTC
 */
class variableCuantitativa extends Model
{
    use SoftDeletes;

    public $table = 'variable_cuantitativas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'latitud',
        'longitud',
        'valor',
        'estandar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
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
        'latitud' => 'required',
        'longitud' => 'required',
        'valor' => 'required',
        'estandar' => 'required'
    ];

    
}
