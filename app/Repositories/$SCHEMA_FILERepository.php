<?php

namespace App\Repositories;

use App\Models\$SCHEMA_FILE;
use App\Repositories\BaseRepository;

/**
 * Class $SCHEMA_FILERepository
 * @package App\Repositories
 * @version November 4, 2022, 6:57 am UTC
*/

class $SCHEMA_FILERepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return $SCHEMA_FILE::class;
    }
}
