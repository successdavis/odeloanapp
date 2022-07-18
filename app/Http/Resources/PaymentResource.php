<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'  => $this->id,
            'payment_date'  => Carbon::parse($this->release_date)->toDayDateTimeString(),
            'collected_by'  => $this->user->name,
            'method'        => $this->payment_method,
            'amount'        => $this->amount,
        ];
    }
}
