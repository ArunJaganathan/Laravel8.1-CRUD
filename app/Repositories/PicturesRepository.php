<?php

namespace App\Repositories;

use App\Models\Pictures;
use App\Repositories\BaseRepository;

/**
 * Class PicturesRepository
 * @package App\Repositories
 * @version November 8, 2022, 5:24 am UTC
*/

class PicturesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name','profile_name'
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
        return Pictures::class;
    }
}
