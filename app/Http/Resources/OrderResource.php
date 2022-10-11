<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'name' => $this->name,
            'fname' => $this->fname,
            'lname' => $this->lname,
            'phone' => $this->phone,
            'address' => $this->address,
            'location' => $this->location,
            'city' => $this->city,
            'productname' => $this->productname,
            'itemprice' => $this->itemprice,
            'totalprice' => $this->totalprice,
            'product_id' => $this->product_id,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at
        ];
    }
}
