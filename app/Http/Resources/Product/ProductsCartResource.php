<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Color\ColorResource;
use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductCartResource extends JsonResource
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
            'id' =>$this->id,
            'title' =>$this->title,
            'image_url' =>$this->imageUrl,
            'price' =>$this->price,
            'count' =>$this->count,
            'product_images' => ProductImageResource::collection($this->productImages),
        ];
    }
}
