<?php

namespace App\Repositories;

use App\Models\SubCategory;
use App\Repositories\BaseRepository;

/**
 * Class SubCategoryRepository
 * @package App\Repositories
 * @version November 6, 2022, 8:28 am UTC
*/

class SubCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'category_id',
        'status',
        'image'
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
        return SubCategory::class;
    }
}
