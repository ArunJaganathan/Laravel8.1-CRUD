<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Coupons
 * @package App\Models
 * @version November 15, 2022, 5:00 am UTC
 *
 * @property integer $coupon_code_id
 * @property string $codes
 * @property integer $is_used
 * @property integer $status
 * @property integer $user_id
 * @property string $date_used
 */
class Coupons extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'coupons';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'coupon_code_id',
        'codes',
        'is_used',
        'status',
        'user_id',
        'date_used'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'coupon_code_id' => 'integer',
        'codes' => 'string',
        'is_used' => 'integer',
        'status' => 'integer',
        'user_id' => 'integer',
        'date_used' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'coupon_code_id' => 'required',
        'codes' => 'required'
    ];

    
}
