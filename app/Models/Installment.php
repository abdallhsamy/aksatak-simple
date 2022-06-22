<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Installment
 * @package App\Models
 * @version June 22, 2022, 6:18 pm UTC
 *
 * @property \App\Models\Sell $sell
 * @property integer $sell_id
 * @property string $date
 * @property number $amount
 * @property string $payment_method
 */
class Installment extends Model
{
    use SoftDeletes;


    public $table = 'installments';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'sell_id',
        'date',
        'amount',
        'payment_method'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sell_id' => 'integer',
        'date' => 'date',
        'amount' => 'decimal:2',
        'payment_method' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sell_id' => 'required',
        'date' => 'required',
        'amount' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function sell()
    {
        return $this->belongsTo(\App\Models\Sell::class, 'sell_id', 'id');
    }
}
