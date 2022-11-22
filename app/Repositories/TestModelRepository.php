<?php

namespace App\Repositories;

use App\Models\TestModel;
use App\Repositories\BaseRepository;

/**
 * Class TestModelRepository
 * @package App\Repositories
 * @version November 14, 2022, 1:37 pm UTC
*/

class TestModelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Date_valid'
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
        return TestModel::class;
    }
}
