<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Producttype;

/**
 * Class Pvalue
 * @package App\Models
 * @version June 2, 2023, 3:34 am UTC
 *
 * @property string $name
 * @property string $description
 */
class Pvalue extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pvalues';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'ptype'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'ptype'=> 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];


    /**
     * Get the user associated with the Pvalue
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ptypes()
    {
        return $this->hasOne(Producttype::class, 'id', 'ptype');
    }
}
