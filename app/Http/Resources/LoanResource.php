<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanResource extends JsonResource
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
            'id' => $this->id,
            'member_name' => $this->owner->name,
            'principal_amount' => number_format($this->principal_amount,2),
            'duration' => $this->getDuration() . ' ' . $this->category->duration_period,
            'loan_interest' => number_format($this->getInterest()) . '%/' . $this->category->interest_period,
            'grace_duration' => $this->category->grace_duration . ' ' . $this->category->duration_period,
            'due' => number_format($this->totalDue(),2),
        ];
    }
}
