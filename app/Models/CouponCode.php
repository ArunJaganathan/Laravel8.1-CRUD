<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class CouponCode
 * @package App\Models
 * @version November 14, 2022, 2:00 pm UTC
 *
 * @property string $coupon_code
 * @property string $start_date
 * @property string $expiry_date
 * @property integer $coupon_count
 * @property integer $coupon_type
 * @property integer $status
 * @property string $deleted_at
 */
class CouponCode extends Model
{
    use SoftDeletes;


    public $table = 'CouponCode';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'coupon_code',
        'start_date',
        'expiry_date',
        'coupon_count',
        'coupon_type',
        'status',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'coupon_code' => 'string',
        'start_date' => 'datetime',
        'expiry_date' => 'datetime',
        'coupon_count' => 'integer',
        'coupon_type' => 'integer',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
