<?php

namespace App\Repositories;

use App\Models\Coupons;
use App\Repositories\BaseRepository;

/**
 * Class CouponsRepository
 * @package App\Repositories
 * @version November 15, 2022, 5:00 am UTC
*/

class CouponsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'coupon_code_id',
        'codes',
        'is_used',
        'status',
        'user_id',
        'date_used'
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
        return Coupons::class;
    }
    public function createCoupon($data)
    {
        $coupon_count = $data['coupon_count'];
        for ($i=1; $i <=$coupon_count ; $i++) { 
            
        }
    }
    public function getCouponsById($id)
    {
        return $coupns = Coupons::where('coupon_code_id', $id)->paginate(10);
    }
}
