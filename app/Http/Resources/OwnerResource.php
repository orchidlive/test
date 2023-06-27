<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OwnerResource extends JsonResource
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
            'forename' => $this->forename,
            'surname' => $this->surname,
            'email' => $this->email,
            'phone' => $this->phone,
            'cars' => CarResource::collection($this->cars),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
