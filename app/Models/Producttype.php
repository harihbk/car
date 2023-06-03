<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Producttype
 * @package App\Models
 * @version June 1, 2023, 5:17 pm UTC
 *
 * @property string $name
 * @property string $types
 */
class Producttype extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'producttypes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'types'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'types' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'types' => 'required'
    ];

    
}
