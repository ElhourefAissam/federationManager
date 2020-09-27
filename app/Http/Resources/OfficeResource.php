<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OfficeResource extends JsonResource
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
            'AdressFr' => $this->AdressFr,
            'AdressAr' => $this->AdressAr,
            'Telephone' => $this->Telephone,
        ];
    }
}
