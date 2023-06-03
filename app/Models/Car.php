<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Carimage;
/**
 * Class Car
 * @package App\Models
 * @version June 2, 2023, 5:05 am UTC
 *
 * @property string $price
 * @property string $make
 * @property string $modelc
 * @property string $kmdriven
 * @property string $transmission
 * @property string $fueltype
 * @property string $registrationyear
 * @property string $noofowner
 * @property string $insurancevalidity
 * @property string $insurancetype
 * @property string $rto
 * @property string $carlocation
 * @property string $makeyear
 * @property string $price
 * @property string $emi
 * @property string $address
 */
class Car extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cars';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'address',
        'profile',
        'slug'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'string',
        'make' => 'string',
        'modelc' => 'string',
        'kmdriven' => 'string',
        'transmission' => 'string',
        'fueltype' => 'string',
        'registrationyear' => 'string',
        'noofowner' => 'string',
        'insurancevalidity' => 'string',
        'insurancetype' => 'string',
        'rto' => 'string',
        'carlocation' => 'string',
        'makeyear' => 'string',
        'emi' => 'string',
        'address' => 'string',
        'profile'=>'string',
        'slug'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'price' => 'required',
        'make' => 'required',
        'modelc' => 'required',
        'slug' => 'required'
    ];

    /**
     * Get all of the comments for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gallery()
    {
        return $this->hasMany(Carimage::class, 'car', 'id');
    }

}
