<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'user' => $this->whenLoaded('user', fn () => new UserResource($this->user)),
            'number' => $this->number,
            'street' => $this->street,
            'suburb' => $this->suburb
        ];
    }
}
