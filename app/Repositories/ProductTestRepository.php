<?php

namespace App\Repositories;

use App\Models\ProductTest;
use App\Repositories\BaseRepository;

/**
 * Class ProductTestRepository
 * @package App\Repositories
 * @version November 5, 2022, 1:12 pm UTC
*/

class ProductTestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status'
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
        return ProductTest::class;
    }
}
