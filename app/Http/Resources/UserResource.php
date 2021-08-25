<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'first_name' => $this->firt_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'address'=> new AddressResource($this->address),
            'addresses' => AddressResource::collection($this->addresses),
        ];
    }
}
