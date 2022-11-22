<?php

namespace App\Repositories;

use App\Models\CouponCode;
use App\Repositories\BaseRepository;

/**
 * Class CouponCodeRepository
 * @package App\Repositories
 * @version November 14, 2022, 2:00 pm UTC
*/

class CouponCodeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'coupon_code',
        'start_date',
        'expiry_date',
        'coupon_count',
        'coupon_type',
        'status',
        'deleted_at'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CouponCode::class;
    }
    public function generateCode($length=4)
    {
        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $res = "";
        for ($i = 0; $i < $length; $i++) {
            $res .= $chars[mt_rand(0, strlen($chars)-1)];
        }
        return $res;
    }
    
}
