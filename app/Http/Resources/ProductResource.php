<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
        'name' => $this->name,
        'description' => $this->description,
        'image' => $this->image,
        'price' => $this->price,
        'stock' => $this->stock,
        'discount' => $this->discount,
        'sku_id' => $this->sku_id,
        'model' => $this->model,
        'tags' => $this->tags,
        'subcat_id' => $this->subcat_id,

    ];
    }
}
