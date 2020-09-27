<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeResource extends JsonResource
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
            'NomFr' => $this->NomFr,
            'NomAr' => $this->NomAr,
            'CNI' => $this->CNI,
            'DNS' => $this->DNS,
            'Sexe' => $this->Sexe,
            'StatutFamilierFr' => $this->StatutFamilierFr,
            'StatutFamilierAr' => $this->StatutFamilierAr,
            'Telephone' => $this->Telephone,
            'AdressFr' => $this->AdressFr,
            'AdressAr' => $this->AdressAr,
            'Image' => $this->Image
        ];
    }
}
