<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class SubCategory
 * @package App\Models
 * @version November 4, 2022, 8:15 am UTC
 *
 * @property \App\Models\Category $category
 * @property string $title
 * @property string $desc
 * @property string $image
 */
class SubCategory extends Model
{


    public $table = 'subcategory';
    



    public $fillable = [
        'title',
        'desc',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function category()
    {
        return $this->hasOne(\App\Models\Category::class, 'cat_id', 'id');
    }
}
