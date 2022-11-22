<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class TestModel
 * @package App\Models
 * @version November 14, 2022, 1:37 pm UTC
 *
 * @property string $Date_valid
 */
class TestModel extends Model
{
    use SoftDeletes;


    public $table = 'testtbl';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Date_valid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Date_valid' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
