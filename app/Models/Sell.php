<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Sell
 * @package App\Models
 * @version June 22, 2022, 5:59 pm UTC
 *
 * @property \App\Models\Customer $customer
 * @property \App\Models\Product $product
 * @property integer $customer_id
 * @property integer $product_id
 * @property number $price
 * @property number $paid_amount
 * @property number $installent_price
 * @property string $due_duration
 * @property integer $grace_period
 */
class Sell extends Model
{
    use SoftDeletes;


    public $table = 'sells';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'customer_id',
        'product_id',
        'price',
        'paid_amount',
        'installent_price',
        'due_duration',
        'grace_period'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'product_id' => 'integer',
        'price' => 'decimal:2',
        'paid_amount' => 'decimal:2',
        'installent_price' => 'decimal:2',
        'due_duration' => 'string',
        'grace_period' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_id' => 'required',
        'product_id' => 'required',
        'price' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id', 'id');
    }
}
