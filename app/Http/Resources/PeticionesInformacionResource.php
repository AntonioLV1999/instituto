<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PeticionesInformacionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
return[
        'id' -> $this->id,
        'tutorGrupo' -> $this->tutorGrupo,
        'alumno' -> $this->alumno,
        'observaciones' -> $this->observaciones
    ];

        //return parent::toArray($request);
    }
}
