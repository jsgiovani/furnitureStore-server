<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'categoryId'=> $this->category_id,
            'companyId'=> $this->company_id,
            'slug'=> $this->slug,
            'price'=> $this->price,
            'image'=>   asset("storage/img/$this->img_url"),
            'review'=> $this->review,
            'description'=> $this->description,
            'status'=> $this->status,
            'category' => new CategoryResource($this->whenLoaded('category')),
            'company' => new CompanyResource($this->whenLoaded('company'))
        ];
    }
}
