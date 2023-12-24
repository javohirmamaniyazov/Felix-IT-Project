<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WarehouseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'material_id' => $this->material_id,
            'product_id' => $this->product_id,
            'remainder' => $this->remainder,
            'quantity' => $this->quantity,
            'material' => new MaterialResource($this->whenLoaded('material')),
            'product' => new ProductResource($this->whenLoaded('product')),
        ];
    }
}
