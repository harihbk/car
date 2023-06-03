<?php

namespace App\Repositories;

use App\Models\Producttype;
use App\Repositories\BaseRepository;

/**
 * Class ProducttypeRepository
 * @package App\Repositories
 * @version June 1, 2023, 5:17 pm UTC
*/

class ProducttypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'types'
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
        return Producttype::class;
    }
}
