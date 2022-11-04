<?php

namespace App\Repositories;

use App\Models\Test;
use App\Repositories\BaseRepository;

/**
 * Class TestRepository
 * @package App\Repositories
 * @version November 4, 2022, 8:28 am UTC
*/

class TestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'age'
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
        return Test::class;
    }
}
