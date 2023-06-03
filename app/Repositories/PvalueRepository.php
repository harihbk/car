<?php

namespace App\Repositories;

use App\Models\Pvalue;
use App\Repositories\BaseRepository;

/**
 * Class PvalueRepository
 * @package App\Repositories
 * @version June 2, 2023, 3:34 am UTC
*/

class PvalueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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
        return Pvalue::class;
    }



}
