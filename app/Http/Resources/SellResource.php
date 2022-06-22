<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SellResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'customer_id' => $this->customer_id,
            'product_id' => $this->product_id,
            'price' => $this->price,
            'paid_amount' => $this->paid_amount,
            'installent_price' => $this->installent_price,
            'due_duration' => $this->due_duration,
            'grace_period' => $this->grace_period,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
