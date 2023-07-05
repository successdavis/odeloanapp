<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class CollectionResource extends JsonResource
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
            'id'                        => $this->id,
            'name'                      => $this->name,
            'saving'                    => $this->TodaySavingsCollection($request->date),
            'long_term_loan'            => $this->todayLongTermLoanCollection($request->date),
            'short_term_loan'           => $this->todayShortTermLoanCollection($request->date),
            'total_fines'               => $this->todayTotalFinesCollection($request->date),
            'grand_total_collections'   => $this->todayGrandTotalCollection($request->date),
        ];
    }
}
