<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Handicapresource extends JsonResource
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
            'lebelFr' => $this->lebelFr,
            'lebelAr' => $this->lebelAr,
            'descriptionFr' => $this->descriptionFr,
            'descriptionAr' => $this->descriptionAr,
        ];
    }
}
