<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Carimage
 * @package App\Models
 * @version June 2, 2023, 5:10 am UTC
 *
 * @property string $car
 * @property string $images
 */
class Carimage extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'carimages';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'car',
        'images'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'car' => 'string',
        'images' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
