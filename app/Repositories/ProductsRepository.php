<?php

namespace App\Repositories;

use App\Models\Products;
use App\Repositories\BaseRepository;

/**
 * Class ProductsRepository
 * @package App\Repositories
 * @version November 4, 2022, 1:58 pm UTC
*/

class ProductsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'category_id',
        'sub_category_id',
        'description',
        'short_description',
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
        return Products::class;
    }
}
