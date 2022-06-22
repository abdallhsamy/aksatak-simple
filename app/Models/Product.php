<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Product
 * @package App\Models
 * @version June 21, 2022, 11:10 pm UTC
 *
 * @property \App\Models\ProductCategory $productCategory
 * @property string $name
 * @property integer $product_category_id
 * @property number $price
 * @property integer $quantity
 */
class Product extends Model
{
    use SoftDeletes;


    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'product_category_id',
        'price',
        'quantity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'product_category_id' => 'integer',
        'price' => 'decimal:2',
        'quantity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3|max:155',
        'price' => 'numeric|nullable|min:0',
        'quantity' => 'numeric|nullable|min:0'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function productCategory()
    {
        return $this->belongsTo(\App\Models\ProductCategory::class, 'product_category_id', 'id');
    }
}
