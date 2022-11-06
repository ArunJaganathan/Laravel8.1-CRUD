<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories
 * @version November 4, 2022, 1:54 pm UTC
*/

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'short_description',
        'image',
        'sub_category_id',
        'category_id'
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
        return Product::class;
    }
}
