<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Atleta extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = $this[0];

        return [
            'nombre' => $data->nombrecompleto,
            'disciplina' => $data->nombreDisciplina,
            'modalidad' => $data->modalidad,
            'fechaNacimiento' => $data->fechaNacimiento,
            'municipio' => $data->municipio 
        ];
    }
}
