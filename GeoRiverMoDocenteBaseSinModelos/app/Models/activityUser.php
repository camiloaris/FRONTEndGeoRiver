<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class activityUser
 * @package App\Models
 * @version November 15, 2016, 4:03 am UTC
 */
class activityUser extends Model
{
    use SoftDeletes;

    public $table = 'activity_users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idActivity',
        'idUser'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idActivity' => 'integer',
        'idUser' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idActivity' => 'required',
        'idUser' => 'required'
    ];

    
}
