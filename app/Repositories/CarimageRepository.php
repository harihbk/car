<?php

namespace App\Repositories;

use App\Models\Carimage;
use App\Repositories\BaseRepository;

/**
 * Class CarimageRepository
 * @package App\Repositories
 * @version June 2, 2023, 5:10 am UTC
*/

class CarimageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'car',
        'images'
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
        return Carimage::class;
    }
}
