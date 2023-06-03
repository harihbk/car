<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Carmaster
 * @package App\Models
 * @version June 2, 2023, 4:59 am UTC
 *
 * @property string $year
 * @property string $make
 * @property string $model
 * @property string $kmdriven
 * @property string $fueltype
 * @property string $transmission
 * @property string $saleprice
 * @property string $emi
 * @property string $address
 * @property string $registrationyear
 * @property string $noofowner
 * @property string $insurancevalidity
 * @property sting $insurancetype
 * @property string $rto
 * @property string $carlocation
 */
class Carmaster extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'carmasters';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'year' => 'string',
        'make' => 'string',
        'model' => 'string',
        'kmdriven' => 'string',
        'fueltype' => 'string',
        'transmission' => 'string',
        'saleprice' => 'string',
        'emi' => 'string',
        'address' => 'string',
        'registrationyear' => 'date',
        'noofowner' => 'string',
        'insurancevalidity' => 'date',
        'rto' => 'string',
        'carlocation' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'year' => 'required',
        'make' => 'required',
        'model' => 'required',
        'kmdriven' => 'required',
        'fueltype' => 'required',
        'transmission' => 'required',
        'saleprice' => 'required',
        'emi' => 'required',
        'registrationyear' => 'required',
        'noofowner' => 'required'
    ];

    
}
