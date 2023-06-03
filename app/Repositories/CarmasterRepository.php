<?php

namespace App\Repositories;

use App\Models\Carmaster;
use App\Repositories\BaseRepository;

/**
 * Class CarmasterRepository
 * @package App\Repositories
 * @version June 2, 2023, 4:59 am UTC
*/

class CarmasterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'year',
        'make',
        'model',
        'kmdriven',
        'fueltype',
        'transmission',
        'saleprice',
        'emi',
        'address',
        'registrationyear',
        'noofowner',
        'insurancevalidity',
        'insurancetype',
        'rto',
        'carlocation'
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
        return Carmaster::class;
    }
}
