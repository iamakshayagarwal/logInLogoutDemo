<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScategoriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      //return parent::toArray($request);
      return [
        'sub_cat_name' => $this->sub_cat_name,
        'cat_id' => $this->cat_id

    ];
    }
}
