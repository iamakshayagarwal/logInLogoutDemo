<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return [
           'name' => $this->name,
           'number' => $this->number,
           'country' => $this->country,
           'city' => $this->city,
           'address_line1' => $this->address_line1,
           'address_line2' => $this->address_line2,
       ];
    }
}
