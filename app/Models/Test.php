<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Test
 * @package App\Models
 * @version November 4, 2022, 8:28 am UTC
 *
 * @property string $title
 * @property string $age
 */
class Test extends Model
{


    public $table = 'test';
    



    public $fillable = [
        'title',
        'age'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'age' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
