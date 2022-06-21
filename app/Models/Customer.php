<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Customer
 * @package App\Models
 * @version June 21, 2022, 8:54 pm UTC
 *
 * @property string $name
 * @property string $address
 * @property string $phone_number
 * @property string $national_id
 */
class Customer extends Model
{
    use SoftDeletes;


    public $table = 'customers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'address',
        'phone_number',
        'national_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'address' => 'string',
        'phone_number' => 'string',
        'national_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3|max:155',
        'address' => 'required|min:3|max:155',
        'phone_number' => 'required|min:10|max:14',
        'national_id' => 'required|min:14|max:14'
    ];

    
}
