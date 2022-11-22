<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class employee
 * @package App\Models
 * @version November 19, 2022, 4:30 pm UTC
 *
 * @property string $name
 * @property string $address
 * @property string $email
 */
class employee extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'employees';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'address',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'address' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
