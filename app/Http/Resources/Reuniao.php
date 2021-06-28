<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Reuniao extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'convidados' => $this->convidados,
            'data_agendamento' => $this->data_agendamento,
            'pauta' => $this->pauta,
            'status' => $this->status,
            'horario' => $this->horario,
            'duracao' => $this->duracao,  
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
