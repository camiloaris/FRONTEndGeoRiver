<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class salida
 * @package App\Models
 * @version November 10, 2016, 9:15 pm UTC
 */
class salida extends Model
{
    use SoftDeletes;

    public $table = 'salidas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'programa',
        'asignatura',
        'salida',
        'fechaInicio',
        'fechaFin',
        'semestre',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'programa' => 'integer',
        'asignatura' => 'string',
        'salida' => 'string',
        'fechaInicio' => 'date',
        'fechaFin' => 'date',
        'semestre' => 'integer',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'programa' => 'required',
        'asignatura' => 'required',
        'salida' => 'required',
        'fechaInicio' => 'required',
        'fechaFin' => 'required',
        'semestre' => 'required',
        'password' => 'required'
    ];

    
}
