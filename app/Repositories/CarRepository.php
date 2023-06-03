<?php

namespace App\Repositories;

use App\Models\Car;
use App\Repositories\BaseRepository;

/**
 * Class CarRepository
 * @package App\Repositories
 * @version June 2, 2023, 5:05 am UTC
*/

class CarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'price',
        'make',
        'modelc',
        'kmdriven',
        'transmission',
        'fueltype',
        'registrationyear',
        'noofowner',
        'insurancevalidity',
        'insurancetype',
        'rto',
        'carlocation',
        'makeyear',
        'price',
        'emi',
        'address'
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
        return Car::class;
    }
}
