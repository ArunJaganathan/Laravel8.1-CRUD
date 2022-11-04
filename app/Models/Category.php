<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Category
 * @package App\Models
 * @version November 4, 2022, 8:11 am UTC
 *
 * @property string $title
 * @property string $desc
 */
class Category extends Model
{


    public $table = 'category';
    



    public $fillable = [
        'title',
        'desc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
