<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
//        return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'family' => $this->family,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'province_id' => $this->province_id,
            'city_id' => $this->city_id,
            'created_at' => $this->created_at,
        ];
    }
}
