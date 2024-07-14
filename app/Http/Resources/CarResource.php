<?php

namespace App\Http\Resources;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
   
    public function toArray(Request $request): array
    {
        return [
            'CarId' => $this->resource->CarId,
            'name' => $this->resource->name,
            'repairs' => $this->resource->repairs,
            'ReplacedParts' => $this->resource->ReplacedParts,
            'PendingRepairs' => $this->resource->PendingRepairs,
            'mechanic_update' => $this->resource->mechanic_update,
        ];
    }
}
