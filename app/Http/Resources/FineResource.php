<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class FineResource extends JsonResource
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
            'name' =>  $this->name,
            'amount' => $this->amount,
            'description' => $this->description,
            'status'    => $this->status,
            'user'  => ucwords($this->user->name),
            'date'  => Carbon::parse($this->created_at)->format('d-M-Y'),
        ];
    }
}
