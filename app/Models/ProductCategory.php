<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class ProductCategory
 * @package App\Models
 * @version June 21, 2022, 9:03 pm UTC
 *
 * @property string $name
 */
class ProductCategory extends Model
{
    use SoftDeletes;


    public $table = 'product_categories';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3|max:155'
    ];


}
