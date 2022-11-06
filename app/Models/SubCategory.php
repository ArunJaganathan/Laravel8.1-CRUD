<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SubCategory
 * @package App\Models
 * @version November 6, 2022, 8:28 am UTC
 *
 * @property string $title
 * @property string $description
 * @property integer $category_id
 * @property integer $status
 * @property string $image
 */
class SubCategory extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'sub_categories';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description',
        'category_id',
        'status',
        'image',
        'is_hot'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'category_id' => 'integer',
        'status' => 'integer',
        'image' => 'string',
        'is_hot' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'category_id' => 'required',
        'status' => 'required',
        'image' => 'required',
    ];

    
}
